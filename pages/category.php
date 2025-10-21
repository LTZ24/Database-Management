<?php
require_once '../includes/config.php';

if (!isLoggedIn()) {
    header('Location: ../auth/login.php');
    exit;
}

$categories = getDatabaseCategories();
$cat = $_GET['cat'] ?? '';

if (!isset($categories[$cat])) {
    header('Location: dashboard.php');
    exit;
}

$category = $categories[$cat];

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    try {
        $client = getGoogleClient();
        $service = new Google_Service_Drive($client);
        
        $file = new Google_Service_Drive_DriveFile();
        $file->setName($_FILES['file']['name']);
        $file->setParents([$category['folder_id']]);
        
        $uploadedFile = $service->files->create(
            $file,
            [
                'data' => file_get_contents($_FILES['file']['tmp_name']),
                'mimeType' => $_FILES['file']['type'],
                'uploadType' => 'multipart'
            ]
        );
        
        $success = "File berhasil diupload: " . $uploadedFile->name;
    } catch (Exception $e) {
        $error = "Error: " . $e->getMessage();
    }
}

// Files akan diload via AJAX untuk performa lebih cepat
// Tidak perlu load files di server-side lagi
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $category['name']; ?> - SMKN 62 Jakarta</title>
    <link rel="icon" type="image/png" href="../assets/images/smk62.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/css/category.css">
</head>
<body>
    <?php 
    $pageTitle = $category['name'];
    $showBackButton = true;
    $backUrl = 'dashboard.php';
    include '../includes/header.php'; 
    ?>
    
    <div class="container">
        <div class="category-header">
            <div class="category-icon" style="background: linear-gradient(135deg, <?php echo $category['color']; ?>, <?php echo $category['color']; ?>dd);">
                <i class="fas <?php echo $category['icon']; ?>"></i>
            </div>
            <div class="category-info">
                <h1><?php echo $category['name']; ?></h1>
                <p>Kelola dan upload file ke Google Drive</p>
            </div>
            <div>
                <a href="https://drive.google.com/drive/folders/<?php echo $category['folder_id']; ?>" 
                   target="_blank" 
                   class="btn btn-primary">
                    <i class="fas fa-external-link-alt"></i> Buka di Google Drive
                </a>
            </div>
        </div>
        
        <?php if (isset($success)): ?>
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> <?php echo $success; ?>
        </div>
        <?php endif; ?>
        
        <?php if (isset($error)): ?>
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
        </div>
        <?php endif; ?>
        
        <!-- Upload Form -->
        <div class="upload-form">
            <h3 class="upload-title">
                <i class="fas fa-cloud-upload-alt"></i> Upload File
            </h3>
            <form method="POST" enctype="multipart/form-data" id="uploadForm">
                <div class="form-group">
                    <input type="file" name="file" id="fileInput" class="form-control" required>
                    <small class="file-size-hint">
                        <i class="fas fa-info-circle"></i> Max: 100MB • Semua tipe file
                    </small>
                </div>
                <button type="submit" class="btn btn-primary" id="uploadBtn">
                    <i class="fas fa-upload"></i> Upload ke Google Drive
                </button>
            </form>
            
            <!-- Upload Progress Bar -->
            <div id="uploadProgress" class="d-none mt-20">
                <div class="upload-progress-wrapper">
                    <i class="fas fa-file-upload upload-icon" style="color: <?php echo $category['color']; ?>;"></i>
                    <div class="progress-content">
                        <div id="fileName" class="progress-file-name"></div>
                        <div class="progress-bar-container">
                            <div id="progressBar" style="background: linear-gradient(90deg, <?php echo $category['color']; ?>, <?php echo $category['color']; ?>dd); height: 100%; width: 0%; transition: width 0.3s ease; border-radius: 4px;"></div>
                        </div>
                        <div class="progress-info">
                            <span id="progressText" class="progress-text">Mempersiapkan...</span>
                            <span id="progressPercent" class="progress-percent" style="color: <?php echo $category['color']; ?>;">0%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Files List -->
        <div class="flex-between mb-20">
            <h3 class="upload-title m-0">
                <i class="fas fa-files"></i> Daftar File <span id="fileCount" class="file-count-badge">(Loading...)</span>
            </h3>
        </div>
        
        <!-- Filter Section -->
        <div id="filterSection" class="filter-section d-none">
            <div class="filter-group">
                <label><i class="fas fa-filter"></i> Filter:</label>
                <select id="filter-files" class="filter-select">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="a-z">Nama A-Z</option>
                    <option value="z-a">Nama Z-A</option>
                    <option value="largest">Ukuran Terbesar</option>
                    <option value="smallest">Ukuran Terkecil</option>
                </select>
                
                <div class="date-filter-group">
                    <label><i class="fas fa-calendar-alt"></i> Tanggal:</label>
                    <input type="date" id="date-filter-files" class="date-input" placeholder="Pilih tanggal">
                    <button type="button" id="clear-date-files" class="btn-clear-date" title="Hapus filter tanggal">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Loading State -->
        <div id="loadingState" class="state-container">
            <i class="fas fa-spinner fa-spin state-icon" style="color: <?php echo $category['color']; ?>;"></i>
            <p class="state-text">Memuat daftar file...</p>
        </div>
        
        <!-- Empty State -->
        <div id="emptyState" class="empty-state d-none">
            <i class="fas fa-folder-open"></i>
            <p>Folder masih kosong. Upload file pertama Anda!</p>
        </div>
        
        <!-- Files Table -->
        <div id="filesGrid" class="files-table-container d-none">
            <table class="files-table">
                <thead>
                    <tr>
                        <th class="col-no">No</th>
                        <th class="col-icon">Tipe</th>
                        <th class="col-name">Nama File</th>
                        <th class="col-meta">Tanggal Dibuat</th>
                        <th class="col-actions">Aksi</th>
                    </tr>
                </thead>
                <tbody id="filesTableBody">
                    <!-- Files will be loaded via AJAX -->
                </tbody>
            </table>
        </div>
        
        <!-- Pagination Controls -->
        <div class="table-controls">
            <div class="per-page-control">
                <label for="files-per-page">Tampilkan:</label>
                <select id="files-per-page" class="per-page-select">
                    <option value="5">5</option>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </div>
            <div id="files-pagination" class="pagination"></div>
        </div>
        
        <!-- Error State -->
        <div id="errorState" class="empty-state d-none">
            <i class="fas fa-exclamation-triangle" style="color: #dc3545;"></i>
            <p id="errorMessage" style="color: #dc3545;">Error loading files</p>
            <button onclick="loadFiles()" class="btn btn-primary mt-15">
                <i class="fas fa-sync-alt"></i> Coba Lagi
            </button>
        </div>
    </div>
    
    <!-- Modal Rename File -->
    <div id="renameModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-edit"></i> Rename File</h3>
                <button class="modal-close" onclick="closeRenameModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama File Baru</label>
                    <input type="text" id="newFileName" class="form-control" placeholder="Masukkan nama file baru">
                    <small class="form-hint">Nama file dengan ekstensi (contoh: dokumen.pdf)</small>
                    
                    <!-- Status Message -->
                    <div id="renameStatus" class="rename-status d-none">
                        <i class="fas fa-check-circle"></i>
                        <span id="renameStatusText"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeRenameModal()">
                    <i class="fas fa-times"></i> Batal
                </button>
                <button class="btn btn-primary" onclick="saveRename()">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </div>
        </div>
    </div>
    
    <script>
    // Global variables
    const categoryColor = '<?php echo $category['color']; ?>';
    const categoryName = '<?php echo $cat; ?>';
    
    // Load files via AJAX on page load
    window.addEventListener('DOMContentLoaded', function() {
        loadFiles();
    });
    
    // Function to load files from API
    function loadFiles() {
        const loadingState = document.getElementById('loadingState');
        const emptyState = document.getElementById('emptyState');
        const filesGrid = document.getElementById('filesGrid');
        const errorState = document.getElementById('errorState');
        const fileCount = document.getElementById('fileCount');
        
        // Show loading state
        loadingState.classList.remove('d-none');
        emptyState.classList.add('d-none');
        filesGrid.classList.add('d-none');
        errorState.classList.add('d-none');
        fileCount.textContent = '(Loading...)';
        
        // Fetch files from API
        fetch('api_get_files.php?cat=' + categoryName)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                loadingState.classList.add('d-none');
                
                if (data.success && data.files.length > 0) {
                    // Show files
                    fileCount.textContent = '(' + data.totalFiles + ' file)';
                    // Store files globally for filtering
                    window.allFiles = data.files;
                    renderFiles(data.files);
                    filesGrid.classList.remove('d-none');
                    document.getElementById('filterSection').classList.remove('d-none');
                    setupFilter();
                } else {
                    // Show empty state
                    fileCount.textContent = '(0 file)';
                    emptyState.classList.remove('d-none');
                    document.getElementById('filterSection').classList.add('d-none');
                }
            })
            .catch(error => {
                console.error('Error loading files:', error);
                loadingState.classList.add('d-none');
                errorState.classList.remove('d-none');
                document.getElementById('errorMessage').textContent = 'Error: ' + error.message;
                fileCount.textContent = '(Error)';
            });
    }
    
    // Function to render files
    function renderFiles(files) {
        const filesTableBody = document.getElementById('filesTableBody');
        filesTableBody.innerHTML = '';
        
        // Store all files for pagination
        window.currentFiles = files;
        
        // Initialize pagination if needed
        if (!window.filesInitialized) {
            initFilesPagination();
            window.filesInitialized = true;
        }
        
        // Update pagination based on current files
        updateFilesPagination();
    }
    
    // Pagination for Files
    let filesCurrentPage = 1;
    let filesPerPage = 10;
    
    function initFilesPagination() {
        // Per page change event
        document.getElementById('files-per-page')?.addEventListener('change', function() {
            filesPerPage = parseInt(this.value);
            filesCurrentPage = 1;
            updateFilesPagination();
        });
    }
    
    function updateFilesPagination() {
        const filesTableBody = document.getElementById('filesTableBody');
        const paginationContainer = document.getElementById('files-pagination');
        if (!filesTableBody || !paginationContainer || !window.currentFiles) return;
        
        const files = window.currentFiles;
        const totalPages = Math.ceil(files.length / filesPerPage);
        
        // Clear table body
        filesTableBody.innerHTML = '';
        
        // Calculate page range
        const start = (filesCurrentPage - 1) * filesPerPage;
        const end = start + filesPerPage;
        const pageFiles = files.slice(start, end);
        
        // Render files for current page
        pageFiles.forEach((file, index) => {
            const fileRow = document.createElement('tr');
            fileRow.style.animation = 'slideIn 0.3s ease';
            
            // Format file size
            let fileSize = '';
            if (file.size) {
                const kb = file.size / 1024;
                const mb = kb / 1024;
                fileSize = mb > 1 ? mb.toFixed(2) + ' MB' : kb.toFixed(2) + ' KB';
            }
            
            // Format date
            const createdDate = new Date(file.createdTime);
            const formattedDate = createdDate.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'short',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
            
            // Get file icon based on mime type
            const icon = getFileIcon(file.mimeType);
            
            // Store file data for filtering
            fileRow.dataset.name = file.name.toLowerCase();
            fileRow.dataset.size = file.size || 0;
            fileRow.dataset.date = file.createdTime;
            
            fileRow.innerHTML = `
                <td class="col-no" data-label="No">${start + index + 1}</td>
                <td class="col-icon" data-label="Tipe">
                    <i class="${icon}"></i>
                </td>
                <td class="col-name" data-label="Nama File">
                    ${escapeHtml(file.name)}
                </td>
                <td class="col-meta" data-label="Info">
                    <i class="fas fa-calendar"></i> ${formattedDate}
                    ${fileSize ? '<br><i class="fas fa-file"></i> ' + fileSize : ''}
                </td>
                <td class="col-actions" data-label="Aksi">
                    <div class="file-table-actions">
                        <a href="${file.webViewLink}" 
                           target="_blank" 
                           class="btn btn-primary btn-small">
                            <i class="fas fa-eye"></i> Lihat
                        </a>
                        <button onclick="editFile('${file.id}', '${escapeHtml(file.name)}')" 
                                class="btn btn-secondary btn-small">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button onclick="deleteFile('${file.id}', '${escapeHtml(file.name)}')" 
                                class="btn btn-danger btn-small">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </div>
                </td>
            `;
            
            filesTableBody.appendChild(fileRow);
        });
        
        // Build pagination buttons
        paginationContainer.innerHTML = '';
        
        if (totalPages > 0) {
            // Previous button
            const prevBtn = document.createElement('button');
            prevBtn.className = 'pagination-btn';
            prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
            prevBtn.disabled = filesCurrentPage === 1;
            prevBtn.onclick = () => {
                if (filesCurrentPage > 1) {
                    filesCurrentPage--;
                    updateFilesPagination();
                }
            };
            paginationContainer.appendChild(prevBtn);
            
            // Page numbers
            const maxButtons = window.innerWidth <= 768 ? 3 : 5;
            let startPage = Math.max(1, filesCurrentPage - Math.floor(maxButtons / 2));
            let endPage = Math.min(totalPages, startPage + maxButtons - 1);
            
            if (endPage - startPage < maxButtons - 1) {
                startPage = Math.max(1, endPage - maxButtons + 1);
            }
            
            if (startPage > 1) {
                const firstBtn = document.createElement('button');
                firstBtn.className = 'pagination-btn';
                firstBtn.textContent = '1';
                firstBtn.onclick = () => {
                    filesCurrentPage = 1;
                    updateFilesPagination();
                };
                paginationContainer.appendChild(firstBtn);
                
                if (startPage > 2) {
                    const dots = document.createElement('span');
                    dots.className = 'pagination-info';
                    dots.textContent = '...';
                    paginationContainer.appendChild(dots);
                }
            }
            
            for (let i = startPage; i <= endPage; i++) {
                const pageBtn = document.createElement('button');
                pageBtn.className = 'pagination-btn' + (i === filesCurrentPage ? ' active' : '');
                pageBtn.textContent = i;
                pageBtn.onclick = () => {
                    filesCurrentPage = i;
                    updateFilesPagination();
                };
                paginationContainer.appendChild(pageBtn);
            }
            
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    const dots = document.createElement('span');
                    dots.className = 'pagination-info';
                    dots.textContent = '...';
                    paginationContainer.appendChild(dots);
                }
                
                const lastBtn = document.createElement('button');
                lastBtn.className = 'pagination-btn';
                lastBtn.textContent = totalPages;
                lastBtn.onclick = () => {
                    filesCurrentPage = totalPages;
                    updateFilesPagination();
                };
                paginationContainer.appendChild(lastBtn);
            }
            
            // Next button
            const nextBtn = document.createElement('button');
            nextBtn.className = 'pagination-btn';
            nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
            nextBtn.disabled = filesCurrentPage === totalPages;
            nextBtn.onclick = () => {
                if (filesCurrentPage < totalPages) {
                    filesCurrentPage++;
                    updateFilesPagination();
                }
            };
            paginationContainer.appendChild(nextBtn);
        }
    }
    
    // Get appropriate icon based on mime type
    function getFileIcon(mimeType) {
        if (!mimeType) return 'fas fa-file';
        
        if (mimeType.includes('pdf')) return 'fas fa-file-pdf';
        if (mimeType.includes('word') || mimeType.includes('document')) return 'fas fa-file-word';
        if (mimeType.includes('excel') || mimeType.includes('spreadsheet')) return 'fas fa-file-excel';
        if (mimeType.includes('powerpoint') || mimeType.includes('presentation')) return 'fas fa-file-powerpoint';
        if (mimeType.includes('image')) return 'fas fa-file-image';
        if (mimeType.includes('video')) return 'fas fa-file-video';
        if (mimeType.includes('audio')) return 'fas fa-file-audio';
        if (mimeType.includes('zip') || mimeType.includes('rar') || mimeType.includes('compressed')) return 'fas fa-file-archive';
        if (mimeType.includes('text')) return 'fas fa-file-alt';
        
        return 'fas fa-file';
    }
    
    // Escape HTML to prevent XSS
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
    
    // Add CSS animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;
    document.head.appendChild(style);
    
    // Upload form handler
    document.getElementById('uploadForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const fileInput = document.getElementById('fileInput');
        const file = fileInput.files[0];
        
        if (!file) {
            alert('Pilih file terlebih dahulu!');
            return;
        }
        
        // Validate file size (100MB max)
        const maxSize = 100 * 1024 * 1024; // 100MB in bytes
        if (file.size > maxSize) {
            alert('Ukuran file maksimal 100MB!');
            return;
        }
        
        // Show progress bar
        const uploadProgress = document.getElementById('uploadProgress');
        const fileName = document.getElementById('fileName');
        const progressBar = document.getElementById('progressBar');
        const progressText = document.getElementById('progressText');
        const progressPercent = document.getElementById('progressPercent');
        const uploadBtn = document.getElementById('uploadBtn');
        
        uploadProgress.classList.remove('d-none');
        fileName.textContent = file.name;
        uploadBtn.disabled = true;
        uploadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengupload...';
        
        // Create FormData
        const formData = new FormData();
        formData.append('file', file);
        
        // Create XMLHttpRequest for progress tracking
        const xhr = new XMLHttpRequest();
        
        // Upload progress
        xhr.upload.addEventListener('progress', function(e) {
            if (e.lengthComputable) {
                const percent = Math.round((e.loaded / e.total) * 100);
                progressBar.style.width = percent + '%';
                progressPercent.textContent = percent + '%';
                
                if (percent < 30) {
                    progressText.textContent = 'Mengirim file...';
                } else if (percent < 70) {
                    progressText.textContent = 'Mengupload ke Google Drive...';
                } else if (percent < 100) {
                    progressText.textContent = 'Hampir selesai...';
                } else {
                    progressText.textContent = 'Memproses...';
                }
            }
        });
        
        // Upload complete
        xhr.addEventListener('load', function() {
            if (xhr.status === 200) {
                progressText.textContent = 'Upload berhasil!';
                progressBar.style.background = 'linear-gradient(90deg, #28a745, #20c997)';
                
                setTimeout(function() {
                    window.location.reload();
                }, 1500);
            } else {
                progressText.textContent = 'Upload gagal!';
                progressBar.style.background = 'linear-gradient(90deg, #dc3545, #c82333)';
                uploadBtn.disabled = false;
                uploadBtn.innerHTML = '<i class="fas fa-upload"></i> Upload ke Google Drive';
                
                setTimeout(function() {
                    uploadProgress.classList.add('d-none');
                    alert('Error: ' + xhr.responseText);
                }, 2000);
            }
        });
        
        // Upload error
        xhr.addEventListener('error', function() {
            progressText.textContent = 'Koneksi error!';
            progressBar.style.background = 'linear-gradient(90deg, #dc3545, #c82333)';
            uploadBtn.disabled = false;
            uploadBtn.innerHTML = '<i class="fas fa-upload"></i> Upload ke Google Drive';
            
            setTimeout(function() {
                uploadProgress.classList.add('d-none');
                alert('Terjadi kesalahan saat upload. Coba lagi!');
            }, 2000);
        });
        
        // Send request
        xhr.open('POST', window.location.href, true);
        xhr.send(formData);
    });
    
    // File input change - show file info
    document.getElementById('fileInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const fileSize = (file.size / 1024).toFixed(2);
            const unit = fileSize > 1024 ? 'MB' : 'KB';
            const size = fileSize > 1024 ? (fileSize / 1024).toFixed(2) : fileSize;
            
            console.log('File dipilih: ' + file.name + ' (' + size + ' ' + unit + ')');
        }
    });
    
    // Setup filter functionality
    function setupFilter() {
        const filterSelect = document.getElementById('filter-files');
        const dateInput = document.getElementById('date-filter-files');
        const clearDateBtn = document.getElementById('clear-date-files');
        
        function applyFilters() {
            const filterValue = filterSelect.value;
            const dateValue = dateInput.value;
            let filteredFiles = [...window.allFiles];
            
            // Filter by date
            if (dateValue) {
                const selectedDate = new Date(dateValue);
                selectedDate.setHours(0, 0, 0, 0);
                
                filteredFiles = filteredFiles.filter(file => {
                    const fileDate = new Date(file.createdTime);
                    fileDate.setHours(0, 0, 0, 0);
                    return fileDate.getTime() === selectedDate.getTime();
                });
            }
            
            // Sort files
            switch(filterValue) {
                case 'newest':
                    filteredFiles.sort((a, b) => new Date(b.createdTime) - new Date(a.createdTime));
                    break;
                case 'oldest':
                    filteredFiles.sort((a, b) => new Date(a.createdTime) - new Date(b.createdTime));
                    break;
                case 'a-z':
                    filteredFiles.sort((a, b) => a.name.toLowerCase().localeCompare(b.name.toLowerCase()));
                    break;
                case 'z-a':
                    filteredFiles.sort((a, b) => b.name.toLowerCase().localeCompare(a.name.toLowerCase()));
                    break;
                case 'largest':
                    filteredFiles.sort((a, b) => (b.size || 0) - (a.size || 0));
                    break;
                case 'smallest':
                    filteredFiles.sort((a, b) => (a.size || 0) - (b.size || 0));
                    break;
            }
            
            renderFiles(filteredFiles);
            
            // Reset pagination to first page
            filesCurrentPage = 1;
            
            // Update count
            document.getElementById('fileCount').textContent = `(${filteredFiles.length} file)`;
        }
        
        filterSelect.addEventListener('change', applyFilters);
        dateInput.addEventListener('change', applyFilters);
        clearDateBtn.addEventListener('click', function() {
            dateInput.value = '';
            applyFilters();
        });
    }
    
    // Global variables for rename
    let currentFileId = null;
    let currentFileName = null;
    
    // File edit function - Show modal
    function editFile(fileId, fileName) {
        currentFileId = fileId;
        currentFileName = fileName;
        
        // Set current filename in input
        document.getElementById('newFileName').value = fileName;
        
        // Hide status message
        hideRenameStatus();
        
        // Show modal
        document.getElementById('renameModal').classList.add('show');
        document.getElementById('newFileName').focus();
    }
    
    // Close rename modal
    function closeRenameModal() {
        document.getElementById('renameModal').classList.remove('show');
        hideRenameStatus();
        currentFileId = null;
        currentFileName = null;
    }
    
    // Show rename status
    function showRenameStatus(message, isSuccess) {
        const statusDiv = document.getElementById('renameStatus');
        const statusText = document.getElementById('renameStatusText');
        const icon = statusDiv.querySelector('i');
        
        statusText.textContent = message;
        statusDiv.classList.remove('d-none', 'success', 'error');
        
        if (isSuccess) {
            statusDiv.classList.add('success');
            icon.className = 'fas fa-check-circle';
        } else {
            statusDiv.classList.add('error');
            icon.className = 'fas fa-exclamation-circle';
        }
    }
    
    // Hide rename status
    function hideRenameStatus() {
        const statusDiv = document.getElementById('renameStatus');
        statusDiv.classList.add('d-none');
        statusDiv.classList.remove('success', 'error');
    }
    
    // Save rename
    function saveRename() {
        const newName = document.getElementById('newFileName').value.trim();
        
        // Hide previous status
        hideRenameStatus();
        
        if (!newName) {
            showRenameStatus('Nama file tidak boleh kosong!', false);
            return;
        }
        
        if (newName === currentFileName) {
            showRenameStatus('Nama file tidak berubah!', false);
            return;
        }
        
        // Show loading
        const saveBtn = event.target;
        const originalHtml = saveBtn.innerHTML;
        saveBtn.disabled = true;
        saveBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
        
        // Call API
        fetch('api_rename_file.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'fileId=' + encodeURIComponent(currentFileId) + '&newName=' + encodeURIComponent(newName)
        })
        .then(response => response.json())
        .then(data => {
            saveBtn.disabled = false;
            saveBtn.innerHTML = originalHtml;
            
            if (data.success) {
                showRenameStatus('✓ File berhasil di-rename!', true);
                currentFileName = newName; // Update current filename
                
                // Reload files after 1 second
                setTimeout(() => {
                    loadFiles();
                }, 1000);
            } else {
                showRenameStatus('Error: ' + data.message, false);
            }
        })
        .catch(error => {
            saveBtn.disabled = false;
            saveBtn.innerHTML = originalHtml;
            showRenameStatus('Terjadi kesalahan: ' + error.message, false);
        });
    }
    
    // File delete function
    function deleteFile(fileId, fileName) {
        if (!confirm(`Apakah Anda yakin ingin menghapus file "${fileName}"?\n\nFile akan dihapus permanen dari Google Drive!`)) {
            return;
        }
        
        // Show loading overlay
        const loadingState = document.getElementById('loadingState');
        loadingState.classList.remove('d-none');
        loadingState.querySelector('.state-text').textContent = 'Menghapus file...';
        
        // Call API
        fetch('api_delete_file.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'fileId=' + encodeURIComponent(fileId)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('File berhasil dihapus!');
                // Reload files
                loadFiles();
            } else {
                loadingState.classList.add('d-none');
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            loadingState.classList.add('d-none');
            alert('Terjadi kesalahan: ' + error.message);
        });
    }
    
    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('renameModal');
        if (event.target === modal) {
            closeRenameModal();
        }
    });
    
    // Handle Enter key in rename input
    document.getElementById('newFileName')?.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            saveRename();
        }
    });
    </script>
    
    <?php include '../includes/footer.php'; ?>
</body>
</html>
