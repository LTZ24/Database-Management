<?php
require_once '../includes/config.php';

// Redirect ke login jika belum login
if (!isLoggedIn()) {
    header('Location: ../auth/login.php');
    exit;
}

$categories = getDatabaseCategories();

// Get data from Google Sheets
$links = getLinksFromSheets();
$forms = getFormsFromSheets();

// Fallback to old JSON if Sheets not configured yet
if (GOOGLE_SHEETS_ID === 'YOUR_SPREADSHEET_ID_HERE') {
    $database = readDatabase();
    $links = $database['links'] ?? [];
    $forms = $database['forms'] ?? [];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Database - SMKN 62 Jakarta</title>
    <link rel="icon" type="image/png" href="../assets/images/smk62.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
    <?php 
    $pageTitle = 'Dashboard';
    $showBackButton = false;
    include '../includes/header.php'; 
    ?>
    
    <div class="container">
        <div class="page-header">
            <h1>Database Management SMKN 62 Jakarta</h1>
            <p>Kelola kategori database, link kegiatan, dan Google Forms</p>
        </div>

        <!-- Kategori Database -->
        <div class="category-section">
            <h2 class="section-title">
                <i class="fas fa-folder-open"></i>
                Kategori Database
            </h2>
            <div class="category-grid">
                <?php foreach ($categories as $key => $category): ?>
                <div class="category-card">
                    <div class="category-icon" style="color: <?php echo $category['color']; ?>">
                        <i class="fas <?php echo $category['icon']; ?>"></i>
                    </div>
                    <div class="category-name"><?php echo $category['name']; ?></div>
                    <div class="category-actions">
                        <a href="category.php?cat=<?php echo $key; ?>" class="category-action-btn" title="Lihat Folder">
                            <i class="fas fa-folder-open"></i>
                        </a>
                        <button class="category-action-btn" onclick="openTablePopup('<?php echo $key; ?>', '<?php echo addslashes($category['name']); ?>')" title="Lihat Tabel">
                            <i class="fas fa-table"></i>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Table Popup Modal -->
        <div id="tablePopup" class="popup-modal" style="display: none;">
            <div class="popup-content">
                <div class="popup-header">
                    <h3 id="popupTitle">Tabel Kategori</h3>
                    <button class="popup-close" onclick="closeTablePopup()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="popup-body" id="popupBody">
                    <div class="loading">
                        <i class="fas fa-spinner fa-spin"></i> Memuat data...
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <!-- Link Kegiatan -->
        <div class="section">
            <div class="flex-between mb-20">
                <h2 class="section-title m-0">
                    <i class="fas fa-link"></i>
                    Link Kegiatan
                </h2>
                <a href="manage_links.php" class="btn btn-primary btn-small">
                    <i class="fas fa-plus"></i> Tambah Link
                </a>
            </div>
            
            <?php if (empty($links)): ?>
            <div class="empty-state">
                <i class="fas fa-inbox"></i>
                <p>Belum ada link kegiatan. Tambahkan link kegiatan baru.</p>
            </div>
            <?php else: ?>
            <!-- Filter -->
            <div class="filter-section">
                <div class="filter-group">
                    <label><i class="fas fa-filter"></i> Filter:</label>
                    <select id="filter-links" class="filter-select">
                        <option value="latest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="a-z">A-Z</option>
                        <option value="z-a">Z-A</option>
                        <option value="today">Hari Ini</option>
                        <option value="week">Minggu Ini</option>
                        <option value="month">Bulan Ini</option>
                    </select>
                    
                    <div class="date-filter-group">
                        <label><i class="fas fa-calendar-alt"></i> Tanggal:</label>
                        <input type="date" id="date-filter-links" class="date-input" placeholder="Pilih tanggal">
                        <button type="button" id="clear-date-links" class="btn-clear-date" title="Hapus filter tanggal">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="data-table-container" id="links-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th class="col-no">No</th>
                            <th class="col-title">Judul Link</th>
                            <th class="col-url">URL</th>
                            <th class="col-meta">Tanggal Dibuat</th>
                            <th class="col-actions">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="links-tbody">
                        <?php foreach ($links as $index => $link): ?>
                        <tr data-title="<?php echo htmlspecialchars($link['title']); ?>" data-index="<?php echo $index; ?>" data-date="<?php echo isset($link['created_at']) ? $link['created_at'] : ''; ?>">
                            <td class="col-no" data-label="No"><?php echo $index + 1; ?></td>
                            <td class="col-title" data-label="Judul">
                                <i class="fas fa-link"></i> <?php echo htmlspecialchars($link['title']); ?>
                            </td>
                            <td class="col-url" data-label="URL">
                                <a href="<?php echo htmlspecialchars($link['url']); ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo htmlspecialchars($link['url']); ?>
                                </a>
                            </td>
                            <td class="col-meta" data-label="Tanggal">
                                <i class="fas fa-calendar"></i> <?php echo isset($link['created_at']) ? date('d M Y, H:i', strtotime($link['created_at'])) : 'N/A'; ?>
                            </td>
                            <td class="col-actions" data-label="Aksi">
                                <div class="table-actions">
                                    <a href="<?php echo htmlspecialchars($link['url']); ?>" target="_blank" class="btn btn-primary btn-small">
                                        <i class="fas fa-external-link-alt"></i> Buka
                                    </a>
                                    <a href="manage_links.php?edit=<?php echo $index; ?>" class="btn btn-secondary btn-small">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="manage_links.php?delete=<?php echo $index; ?>" class="btn btn-danger btn-small" onclick="return confirm('Hapus link ini?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination Controls -->
            <div class="table-controls">
                <div class="per-page-control">
                    <label>Tampilkan:</label>
                    <select id="links-per-page" class="per-page-select">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                    <span>data</span>
                </div>
                <div class="pagination" id="links-pagination">
                    <!-- Pagination buttons will be inserted here by JavaScript -->
                </div>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Google Forms -->
        <div class="section">
            <div class="flex-between mb-20">
                <h2 class="section-title m-0">
                    <i class="fab fa-google"></i>
                    Google Forms
                </h2>
                <a href="manage_forms.php" class="btn btn-primary btn-small">
                    <i class="fas fa-plus"></i> Tambah Form
                </a>
            </div>
            
            <?php if (empty($forms)): ?>
            <div class="empty-state">
                <i class="fas fa-inbox"></i>
                <p>Belum ada Google Form. Tambahkan form baru.</p>
            </div>
            <?php else: ?>
            <!-- Filter -->
            <div class="filter-section">
                <div class="filter-group">
                    <label><i class="fas fa-filter"></i> Filter:</label>
                    <select id="filter-forms" class="filter-select">
                        <option value="latest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="a-z">A-Z</option>
                        <option value="z-a">Z-A</option>
                        <option value="today">Hari Ini</option>
                        <option value="week">Minggu Ini</option>
                        <option value="month">Bulan Ini</option>
                    </select>
                    
                    <div class="date-filter-group">
                        <label><i class="fas fa-calendar-alt"></i> Tanggal:</label>
                        <input type="date" id="date-filter-forms" class="date-input" placeholder="Pilih tanggal">
                        <button type="button" id="clear-date-forms" class="btn-clear-date" title="Hapus filter tanggal">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="data-table-container" id="forms-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th class="col-no">No</th>
                            <th class="col-title">Judul Form</th>
                            <th class="col-url">URL</th>
                            <th class="col-meta">Tanggal Dibuat</th>
                            <th class="col-actions">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="forms-tbody">
                        <?php foreach ($forms as $index => $form): ?>
                        <tr data-title="<?php echo htmlspecialchars($form['title']); ?>" data-index="<?php echo $index; ?>" data-date="<?php echo isset($form['created_at']) ? $form['created_at'] : ''; ?>">
                            <td class="col-no" data-label="No"><?php echo $index + 1; ?></td>
                            <td class="col-title" data-label="Judul">
                                <i class="fab fa-google"></i> <?php echo htmlspecialchars($form['title']); ?>
                            </td>
                            <td class="col-url" data-label="URL">
                                <a href="<?php echo htmlspecialchars($form['url']); ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo htmlspecialchars($form['url']); ?>
                                </a>
                            </td>
                            <td class="col-meta" data-label="Tanggal">
                                <i class="fas fa-calendar"></i> <?php echo isset($form['created_at']) ? date('d M Y, H:i', strtotime($form['created_at'])) : 'N/A'; ?>
                            </td>
                            <td class="col-actions" data-label="Aksi">
                                <div class="table-actions">
                                    <a href="<?php echo htmlspecialchars($form['url']); ?>" target="_blank" class="btn btn-primary btn-small">
                                        <i class="fas fa-external-link-alt"></i> Isi Form
                                    </a>
                                    <a href="manage_forms.php?edit=<?php echo $index; ?>" class="btn btn-secondary btn-small">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="manage_forms.php?delete=<?php echo $index; ?>" class="btn btn-danger btn-small" onclick="return confirm('Hapus form ini?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination Controls -->
            <div class="table-controls">
                <div class="per-page-control">
                    <label>Tampilkan:</label>
                    <select id="forms-per-page" class="per-page-select">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                    <span>data</span>
                </div>
                <div class="pagination" id="forms-pagination">
                    <!-- Pagination buttons will be inserted here by JavaScript -->
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <script>
    // Filter function untuk Links
    function filterLinks() {
        const filterValue = document.getElementById('filter-links').value;
        const dateValue = document.getElementById('date-filter-links').value;
        const container = document.getElementById('links-container');
        const tbody = container.querySelector('tbody');
        let items = Array.from(tbody.querySelectorAll('tr'));
        
        // Filter by date first
        if (dateValue) {
            const selectedDate = new Date(dateValue);
            selectedDate.setHours(0, 0, 0, 0);
            
            items.forEach(item => {
                const itemDate = item.dataset.date;
                if (itemDate) {
                    const date = new Date(itemDate);
                    date.setHours(0, 0, 0, 0);
                    
                    if (date.getTime() === selectedDate.getTime()) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                } else {
                    item.style.display = 'none';
                }
            });
            
            // Filter visible items only
            items = items.filter(item => item.style.display !== 'none');
        } else {
            // Show all items if no date filter
            items.forEach(item => item.style.display = '');
        }
        
        // Sort items
        items.sort((a, b) => {
            const titleA = a.dataset.title.toLowerCase();
            const titleB = b.dataset.title.toLowerCase();
            const dateA = new Date(a.dataset.date || 0);
            const dateB = new Date(b.dataset.date || 0);
            
            switch(filterValue) {
                case 'a-z':
                    return titleA.localeCompare(titleB);
                case 'z-a':
                    return titleB.localeCompare(titleA);
                case 'oldest':
                    return dateA - dateB;
                case 'today':
                case 'week':
                case 'month':
                case 'latest':
                default:
                    return dateB - dateA;
            }
        });
        
        items.forEach(item => tbody.appendChild(item));
        
        // Reset pagination to first page and update
        linksCurrentPage = 1;
        updateLinksPagination();
    }
    
    // Filter function untuk Forms
    function filterForms() {
        const filterValue = document.getElementById('filter-forms').value;
        const dateValue = document.getElementById('date-filter-forms').value;
        const container = document.getElementById('forms-container');
        const tbody = container.querySelector('tbody');
        let items = Array.from(tbody.querySelectorAll('tr'));
        
        // Filter by date first
        if (dateValue) {
            const selectedDate = new Date(dateValue);
            selectedDate.setHours(0, 0, 0, 0);
            
            items.forEach(item => {
                const itemDate = item.dataset.date;
                if (itemDate) {
                    const date = new Date(itemDate);
                    date.setHours(0, 0, 0, 0);
                    
                    if (date.getTime() === selectedDate.getTime()) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                } else {
                    item.style.display = 'none';
                }
            });
            
            // Filter visible items only
            items = items.filter(item => item.style.display !== 'none');
        } else {
            // Show all items if no date filter
            items.forEach(item => item.style.display = '');
        }
        
        // Sort items
        items.sort((a, b) => {
            const titleA = a.dataset.title.toLowerCase();
            const titleB = b.dataset.title.toLowerCase();
            const dateA = new Date(a.dataset.date || 0);
            const dateB = new Date(b.dataset.date || 0);
            
            switch(filterValue) {
                case 'a-z':
                    return titleA.localeCompare(titleB);
                case 'z-a':
                    return titleB.localeCompare(titleA);
                case 'oldest':
                    return dateA - dateB;
                case 'today':
                case 'week':
                case 'month':
                case 'latest':
                default:
                    return dateB - dateA;
            }
        });
        
        items.forEach(item => tbody.appendChild(item));
        
        // Reset pagination to first page and update
        formsCurrentPage = 1;
        updateFormsPagination();
    }
    
    // Event listeners untuk Links
    document.getElementById('filter-links')?.addEventListener('change', filterLinks);
    document.getElementById('date-filter-links')?.addEventListener('change', filterLinks);
    document.getElementById('clear-date-links')?.addEventListener('click', function() {
        document.getElementById('date-filter-links').value = '';
        filterLinks();
    });
    
    // Event listeners untuk Forms
    document.getElementById('filter-forms')?.addEventListener('change', filterForms);
    document.getElementById('date-filter-forms')?.addEventListener('change', filterForms);
    document.getElementById('clear-date-forms')?.addEventListener('click', function() {
        document.getElementById('date-filter-forms').value = '';
        filterForms();
    });
    
    // Pagination for Links
    let linksCurrentPage = 1;
    let linksPerPage = 10;
    let linksAllRows = [];
    
    function initLinksPagination() {
        const tbody = document.getElementById('links-tbody');
        if (!tbody) return;
        
        linksAllRows = Array.from(tbody.querySelectorAll('tr'));
        updateLinksPagination();
        
        // Per page change event
        document.getElementById('links-per-page')?.addEventListener('change', function() {
            linksPerPage = parseInt(this.value);
            linksCurrentPage = 1;
            updateLinksPagination();
        });
    }
    
    function updateLinksPagination() {
        const tbody = document.getElementById('links-tbody');
        const paginationContainer = document.getElementById('links-pagination');
        if (!tbody || !paginationContainer) return;
        
        // Get visible rows (respecting filters)
        const visibleRows = linksAllRows.filter(row => row.style.display !== 'none');
        const totalPages = Math.ceil(visibleRows.length / linksPerPage);
        
        // Hide all rows first
        visibleRows.forEach(row => row.classList.add('d-none'));
        
        // Show rows for current page
        const start = (linksCurrentPage - 1) * linksPerPage;
        const end = start + linksPerPage;
        const pageRows = visibleRows.slice(start, end);
        
        pageRows.forEach((row, index) => {
            row.classList.remove('d-none');
            const noCell = row.querySelector('.col-no');
            if (noCell) noCell.textContent = start + index + 1;
        });
        
        // Build pagination buttons
        paginationContainer.innerHTML = '';
        
        // Previous button
        const prevBtn = document.createElement('button');
        prevBtn.className = 'pagination-btn';
        prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
        prevBtn.disabled = linksCurrentPage === 1;
        prevBtn.onclick = () => {
            if (linksCurrentPage > 1) {
                linksCurrentPage--;
                updateLinksPagination();
            }
        };
        paginationContainer.appendChild(prevBtn);
        
        // Page numbers
        const maxButtons = window.innerWidth <= 768 ? 3 : 5;
        let startPage = Math.max(1, linksCurrentPage - Math.floor(maxButtons / 2));
        let endPage = Math.min(totalPages, startPage + maxButtons - 1);
        
        if (endPage - startPage < maxButtons - 1) {
            startPage = Math.max(1, endPage - maxButtons + 1);
        }
        
        if (startPage > 1) {
            const firstBtn = document.createElement('button');
            firstBtn.className = 'pagination-btn';
            firstBtn.textContent = '1';
            firstBtn.onclick = () => {
                linksCurrentPage = 1;
                updateLinksPagination();
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
            pageBtn.className = 'pagination-btn' + (i === linksCurrentPage ? ' active' : '');
            pageBtn.textContent = i;
            pageBtn.onclick = () => {
                linksCurrentPage = i;
                updateLinksPagination();
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
                linksCurrentPage = totalPages;
                updateLinksPagination();
            };
            paginationContainer.appendChild(lastBtn);
        }
        
        // Next button
        const nextBtn = document.createElement('button');
        nextBtn.className = 'pagination-btn';
        nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
        nextBtn.disabled = linksCurrentPage === totalPages;
        nextBtn.onclick = () => {
            if (linksCurrentPage < totalPages) {
                linksCurrentPage++;
                updateLinksPagination();
            }
        };
        paginationContainer.appendChild(nextBtn);
    }
    
    // Pagination for Forms
    let formsCurrentPage = 1;
    let formsPerPage = 10;
    let formsAllRows = [];
    
    function initFormsPagination() {
        const tbody = document.getElementById('forms-tbody');
        if (!tbody) return;
        
        formsAllRows = Array.from(tbody.querySelectorAll('tr'));
        updateFormsPagination();
        
        // Per page change event
        document.getElementById('forms-per-page')?.addEventListener('change', function() {
            formsPerPage = parseInt(this.value);
            formsCurrentPage = 1;
            updateFormsPagination();
        });
    }
    
    function updateFormsPagination() {
        const tbody = document.getElementById('forms-tbody');
        const paginationContainer = document.getElementById('forms-pagination');
        if (!tbody || !paginationContainer) return;
        
        // Get visible rows (respecting filters)
        const visibleRows = formsAllRows.filter(row => row.style.display !== 'none');
        const totalPages = Math.ceil(visibleRows.length / formsPerPage);
        
        // Hide all rows first
        visibleRows.forEach(row => row.classList.add('d-none'));
        
        // Show rows for current page
        const start = (formsCurrentPage - 1) * formsPerPage;
        const end = start + formsPerPage;
        const pageRows = visibleRows.slice(start, end);
        
        pageRows.forEach((row, index) => {
            row.classList.remove('d-none');
            const noCell = row.querySelector('.col-no');
            if (noCell) noCell.textContent = start + index + 1;
        });
        
        // Build pagination buttons
        paginationContainer.innerHTML = '';
        
        // Previous button
        const prevBtn = document.createElement('button');
        prevBtn.className = 'pagination-btn';
        prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
        prevBtn.disabled = formsCurrentPage === 1;
        prevBtn.onclick = () => {
            if (formsCurrentPage > 1) {
                formsCurrentPage--;
                updateFormsPagination();
            }
        };
        paginationContainer.appendChild(prevBtn);
        
        // Page numbers
        const maxButtons = window.innerWidth <= 768 ? 3 : 5;
        let startPage = Math.max(1, formsCurrentPage - Math.floor(maxButtons / 2));
        let endPage = Math.min(totalPages, startPage + maxButtons - 1);
        
        if (endPage - startPage < maxButtons - 1) {
            startPage = Math.max(1, endPage - maxButtons + 1);
        }
        
        if (startPage > 1) {
            const firstBtn = document.createElement('button');
            firstBtn.className = 'pagination-btn';
            firstBtn.textContent = '1';
            firstBtn.onclick = () => {
                formsCurrentPage = 1;
                updateFormsPagination();
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
            pageBtn.className = 'pagination-btn' + (i === formsCurrentPage ? ' active' : '');
            pageBtn.textContent = i;
            pageBtn.onclick = () => {
                formsCurrentPage = i;
                updateFormsPagination();
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
                formsCurrentPage = totalPages;
                updateFormsPagination();
            };
            paginationContainer.appendChild(lastBtn);
        }
        
        // Next button
        const nextBtn = document.createElement('button');
        nextBtn.className = 'pagination-btn';
        nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
        nextBtn.disabled = formsCurrentPage === totalPages;
        nextBtn.onclick = () => {
            if (formsCurrentPage < totalPages) {
                formsCurrentPage++;
                updateFormsPagination();
            }
        };
        paginationContainer.appendChild(nextBtn);
    }
    
    // Initialize pagination on page load
    window.addEventListener('DOMContentLoaded', function() {
        initLinksPagination();
        initFormsPagination();
    });
    
    // Table Popup Functions
    function openTablePopup(categoryKey, categoryName) {
        const popup = document.getElementById('tablePopup');
        const title = document.getElementById('popupTitle');
        const body = document.getElementById('popupBody');
        
        title.innerHTML = '<i class="fas fa-table"></i> Tabel ' + categoryName;
        popup.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        
        // Load table content via fetch
        body.innerHTML = '<div class="loading"><i class="fas fa-spinner fa-spin"></i> Memuat data...</div>';
        
        fetch('get_category_table.php?cat=' + categoryKey)
            .then(response => response.text())
            .then(html => {
                body.innerHTML = html;
                
                // Now load the actual file data
                const categoryData = document.getElementById('popup-category-data');
                if (categoryData) {
                    const cat = categoryData.dataset.category;
                    const color = categoryData.dataset.color;
                    
                    console.log('Loading files for category:', cat);
                    loadPopupFiles(cat, color);
                }
            })
            .catch(error => {
                body.innerHTML = '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Gagal memuat data</div>';
                console.error('Error loading table:', error);
            });
    }
    
    function loadPopupFiles(categoryKey, categoryColor) {
        fetch('api_get_files.php?cat=' + categoryKey)
            .then(response => {
                console.log('API Response status:', response.status);
                if (!response.ok) {
                    throw new Error('Network response was not ok: ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                console.log('Files data received:', data);
                document.getElementById('tableLoadingState').style.display = 'none';
                document.getElementById('tableContentArea').style.display = 'block';
                
                if (data.files && data.files.length > 0) {
                    renderPopupFiles(data.files, categoryColor);
                } else {
                    document.getElementById('emptyStatePopup').style.display = 'block';
                    document.querySelector('#popup-table-container').style.display = 'none';
                    document.querySelector('.table-controls').style.display = 'none';
                }
            })
            .catch(error => {
                console.error('Error loading files:', error);
                document.getElementById('tableLoadingState').innerHTML = 
                    '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Gagal memuat data: ' + error.message + '</div>';
            });
    }
    
    function getFileIcon(mimeType) {
        if (mimeType.includes('pdf')) return 'fas fa-file-pdf';
        if (mimeType.includes('word') || mimeType.includes('document')) return 'fas fa-file-word';
        if (mimeType.includes('sheet') || mimeType.includes('excel')) return 'fas fa-file-excel';
        if (mimeType.includes('presentation') || mimeType.includes('powerpoint')) return 'fas fa-file-powerpoint';
        if (mimeType.includes('image')) return 'fas fa-file-image';
        if (mimeType.includes('video')) return 'fas fa-file-video';
        if (mimeType.includes('audio')) return 'fas fa-file-audio';
        if (mimeType.includes('zip') || mimeType.includes('rar')) return 'fas fa-file-archive';
        return 'fas fa-file';
    }
    
    function formatFileSize(bytes) {
        if (!bytes) return 'N/A';
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(1024));
        return Math.round(bytes / Math.pow(1024, i) * 100) / 100 + ' ' + sizes[i];
    }
    
    function renderPopupFiles(files, categoryColor) {
        const tbody = document.getElementById('popup-tbody');
        tbody.innerHTML = '';
        
        files.forEach((file, index) => {
            const tr = document.createElement('tr');
            tr.dataset.title = file.name;
            tr.dataset.date = file.createdTime;
            tr.dataset.size = file.size || 0;
            
            tr.innerHTML = `
                <td class="col-no" data-label="No">${index + 1}</td>
                <td class="col-title" data-label="Nama File">
                    <i class="${getFileIcon(file.mimeType)}" style="color: ${categoryColor}"></i>
                    ${file.name}
                </td>
                <td class="col-meta" data-label="Ukuran">
                    <i class="fas fa-hdd"></i> ${formatFileSize(file.size)}
                </td>
                <td class="col-meta" data-label="Tanggal">
                    <i class="fas fa-calendar"></i> ${new Date(file.createdTime).toLocaleString('id-ID', {
                        day: '2-digit',
                        month: 'short',
                        year: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    })}
                </td>
                <td class="col-actions" data-label="Aksi">
                    <div class="table-actions">
                        <a href="${file.webViewLink}" target="_blank" class="btn btn-primary btn-small">
                            <i class="fas fa-eye"></i> Lihat
                        </a>
                        ${file.webContentLink ? `
                            <a href="${file.webContentLink}" class="btn btn-secondary btn-small" download>
                                <i class="fas fa-download"></i> Download
                            </a>
                        ` : ''}
                    </div>
                </td>
            `;
            
            tbody.appendChild(tr);
        });
        
        initPopupPagination();
        setupPopupFilters();
    }
    
    function setupPopupFilters() {
        document.getElementById('popup-filter')?.addEventListener('change', filterPopupTable);
        document.getElementById('popup-date-filter')?.addEventListener('change', filterPopupTable);
        document.getElementById('popup-clear-date')?.addEventListener('click', function() {
            document.getElementById('popup-date-filter').value = '';
            filterPopupTable();
        });
    }
    
    function filterPopupTable() {
        const filterValue = document.getElementById('popup-filter').value;
        const dateValue = document.getElementById('popup-date-filter')?.value;
        const tbody = document.getElementById('popup-tbody');
        let items = Array.from(tbody.querySelectorAll('tr'));
        
        // Filter by date first
        if (dateValue) {
            const selectedDate = new Date(dateValue);
            selectedDate.setHours(0, 0, 0, 0);
            
            items.forEach(item => {
                const itemDate = item.dataset.date;
                if (itemDate) {
                    const date = new Date(itemDate);
                    date.setHours(0, 0, 0, 0);
                    
                    if (date.getTime() === selectedDate.getTime()) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                } else {
                    item.style.display = 'none';
                }
            });
            
            items = items.filter(item => item.style.display !== 'none');
        } else {
            items.forEach(item => item.style.display = '');
        }
        
        // Sort items
        items.sort((a, b) => {
            const titleA = a.dataset.title.toLowerCase();
            const titleB = b.dataset.title.toLowerCase();
            const dateA = new Date(a.dataset.date || 0);
            const dateB = new Date(b.dataset.date || 0);
            
            switch(filterValue) {
                case 'a-z':
                    return titleA.localeCompare(titleB);
                case 'z-a':
                    return titleB.localeCompare(titleA);
                case 'oldest':
                    return dateA - dateB;
                case 'latest':
                default:
                    return dateB - dateA;
            }
        });
        
        items.forEach(item => tbody.appendChild(item));
        
        window.popupCurrentPage = 1;
        updatePopupPagination();
    }
    
    let popupCurrentPage = 1;
    let popupPerPage = 10;
    let popupAllRows = [];
    
    function initPopupPagination() {
        const tbody = document.getElementById('popup-tbody');
        if (!tbody) return;
        
        popupAllRows = Array.from(tbody.querySelectorAll('tr'));
        updatePopupPagination();
        
        document.getElementById('popup-per-page')?.addEventListener('change', function() {
            popupPerPage = parseInt(this.value);
            popupCurrentPage = 1;
            updatePopupPagination();
        });
    }
    
    function updatePopupPagination() {
        const tbody = document.getElementById('popup-tbody');
        const paginationContainer = document.getElementById('popup-pagination');
        if (!tbody || !paginationContainer) return;
        
        const visibleRows = popupAllRows.filter(row => row.style.display !== 'none');
        const totalPages = Math.ceil(visibleRows.length / popupPerPage);
        
        visibleRows.forEach(row => row.classList.add('d-none'));
        
        const start = (popupCurrentPage - 1) * popupPerPage;
        const end = start + popupPerPage;
        const pageRows = visibleRows.slice(start, end);
        
        pageRows.forEach((row, index) => {
            row.classList.remove('d-none');
            const noCell = row.querySelector('.col-no');
            if (noCell) noCell.textContent = start + index + 1;
        });
        
        paginationContainer.innerHTML = '';
        
        if (totalPages <= 1) return;
        
        const prevBtn = document.createElement('button');
        prevBtn.className = 'pagination-btn';
        prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
        prevBtn.disabled = popupCurrentPage === 1;
        prevBtn.onclick = () => {
            if (popupCurrentPage > 1) {
                popupCurrentPage--;
                updatePopupPagination();
            }
        };
        paginationContainer.appendChild(prevBtn);
        
        for (let i = 1; i <= Math.min(totalPages, 5); i++) {
            const pageBtn = document.createElement('button');
            pageBtn.className = 'pagination-btn' + (i === popupCurrentPage ? ' active' : '');
            pageBtn.textContent = i;
            pageBtn.onclick = () => {
                popupCurrentPage = i;
                updatePopupPagination();
            };
            paginationContainer.appendChild(pageBtn);
        }
        
        const nextBtn = document.createElement('button');
        nextBtn.className = 'pagination-btn';
        nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
        nextBtn.disabled = popupCurrentPage === totalPages || totalPages === 0;
        nextBtn.onclick = () => {
            if (popupCurrentPage < totalPages) {
                popupCurrentPage++;
                updatePopupPagination();
            }
        };
        paginationContainer.appendChild(nextBtn);
    }
    
    function closeTablePopup() {
        const popup = document.getElementById('tablePopup');
        popup.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    
    // Close popup when clicking outside
    document.getElementById('tablePopup')?.addEventListener('click', function(e) {
        if (e.target === this) {
            closeTablePopup();
        }
    });
    </script>
    
    <?php include '../includes/footer.php'; ?>
</body>
</html>
