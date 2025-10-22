<?php
require_once '../includes/config.php';

if (!isLoggedIn()) {
    header('Location: ../auth/login.php');
    exit;
}

// Get current forms from Sheets
$allForms = getFormsFromSheets();

// Handle delete
if (isset($_GET['delete'])) {
    $index = intval($_GET['delete']);
    if (deleteFormFromSheets($index)) {
        header('Location: manage_forms.php');
        exit;
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $url = trim($_POST['url'] ?? '');
    
    if (!empty($title) && !empty($url)) {
        if (isset($_POST['edit_index'])) {
            // Update existing form
            $index = intval($_POST['edit_index']);
            if (updateFormInSheets($index, $title, $url)) {
                header('Location: dashboard.php');
                exit;
            }
        } else {
            // Add new form
            if (addFormToSheets($title, $url)) {
                header('Location: dashboard.php');
                exit;
            }
        }
    }
}

// Handle edit
$editForm = null;
$editIndex = null;
if (isset($_GET['edit'])) {
    $editIndex = intval($_GET['edit']);
    if (isset($allForms[$editIndex])) {
        $editForm = $allForms[$editIndex];
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Google Forms - SMKN 62 Jakarta</title>
    <link rel="icon" type="image/png" href="../assets/images/smk62.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
    <?php 
    $pageTitle = 'Kelola Google Forms';
    $showBackButton = true;
    $backUrl = 'dashboard.php';
    include '../includes/header.php'; 
    ?>
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">
                    <i class="fab fa-google"></i>
                    <?php echo $editForm ? 'Edit' : 'Tambah'; ?> Google Form
                </h1>
                <p class="card-subtitle">
                    <?php echo $editForm ? 'Ubah informasi Google Form' : 'Tambahkan Google Form baru ke database'; ?>
                </p>
            </div>
            
            <div class="card-body">
                <form method="POST" class="manage-form">
                    <?php if ($editForm): ?>
                    <input type="hidden" name="edit_index" value="<?php echo $editIndex; ?>">
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-heading"></i> Judul Form
                        </label>
                        <input type="text" 
                               name="title" 
                               class="form-control" 
                               placeholder="Contoh: Pendaftaran Lomba 17 Agustus"
                               value="<?php echo $editForm ? htmlspecialchars($editForm['title']) : ''; ?>"
                               required>
                        <small class="form-hint">
                            <i class="fas fa-info-circle"></i> 
                            Masukkan judul atau nama Google Form
                        </small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fab fa-google"></i> URL Google Form
                        </label>
                        <input type="url" 
                               name="url" 
                               class="form-control" 
                               placeholder="https://forms.gle/..."
                               value="<?php echo $editForm ? htmlspecialchars($editForm['url']) : ''; ?>"
                               required>
                        <small class="form-hint">
                            <i class="fas fa-info-circle"></i> 
                            Masukkan link Google Form yang sudah dibuat
                        </small>
                        <div id="urlNotification" class="form-notification" style="display: none;"></div>
                    </div>
                    
                    <!-- Progress Indicator -->
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-bar-fill" id="progressFill" style="width: 0%"></div>
                        </div>
                        <div class="progress-text">
                            <span id="progressText">0 dari 2 field terisi</span>
                        </div>
                    </div>
                    
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary" id="submitBtn">
                            <i class="fas fa-save"></i> 
                            <?php echo $editForm ? 'Update' : 'Simpan'; ?> Form
                        </button>
                        <a href="dashboard.php" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php include '../includes/footer.php'; ?>
    
    <script>
    // Progress bar tracking
    const form = document.querySelector('.manage-form');
    const titleInput = form.querySelector('input[name="title"]');
    const urlInput = form.querySelector('input[name="url"]');
    const progressFill = document.getElementById('progressFill');
    const progressText = document.getElementById('progressText');
    const urlNotification = document.getElementById('urlNotification');
    const submitBtn = document.getElementById('submitBtn');
    
    function updateProgress() {
        let filled = 0;
        if (titleInput.value.trim()) filled++;
        if (urlInput.value.trim()) filled++;
        
        const percent = (filled / 2) * 100;
        progressFill.style.width = percent + '%';
        progressText.textContent = filled + ' dari 2 field terisi';
    }
    
    titleInput.addEventListener('input', updateProgress);
    urlInput.addEventListener('input', updateProgress);
    
    // Initial progress
    updateProgress();
    
    // Form submission with notification
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
        
        const formData = new FormData(form);
        
        fetch(form.action || window.location.href, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                urlNotification.className = 'form-notification success';
                urlNotification.innerHTML = '<i class="fas fa-check-circle"></i> Data berhasil disimpan!';
                urlNotification.style.display = 'flex';
                
                setTimeout(() => {
                    window.location.href = 'dashboard.php';
                }, 1500);
            } else {
                throw new Error('Gagal menyimpan');
            }
        })
        .catch(error => {
            urlNotification.className = 'form-notification error';
            urlNotification.innerHTML = '<i class="fas fa-exclamation-circle"></i> Gagal menyimpan data!';
            urlNotification.style.display = 'flex';
            
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-save"></i> <?php echo $editForm ? "Update" : "Simpan"; ?> Form';
        });
    });
    </script>
</body>
</html>
