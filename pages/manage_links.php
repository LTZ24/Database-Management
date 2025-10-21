<?php
require_once '../includes/config.php';

if (!isLoggedIn()) {
    header('Location: ../auth/login.php');
    exit;
}

// Get current links from Sheets
$allLinks = getLinksFromSheets();

// Handle delete
if (isset($_GET['delete'])) {
    $index = intval($_GET['delete']);
    if (deleteLinkFromSheets($index)) {
        header('Location: manage_links.php');
        exit;
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $url = trim($_POST['url'] ?? '');
    
    if (!empty($title) && !empty($url)) {
        if (isset($_POST['edit_index'])) {
            // Update existing link
            $index = intval($_POST['edit_index']);
            if (updateLinkInSheets($index, $title, $url)) {
                header('Location: dashboard.php');
                exit;
            }
        } else {
            // Add new link
            if (addLinkToSheets($title, $url)) {
                header('Location: dashboard.php');
                exit;
            }
        }
    }
}

// Handle edit
$editLink = null;
$editIndex = null;
if (isset($_GET['edit'])) {
    $editIndex = intval($_GET['edit']);
    if (isset($allLinks[$editIndex])) {
        $editLink = $allLinks[$editIndex];
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Link Kegiatan - SMKN 62 Jakarta</title>
    <link rel="icon" type="image/png" href="../assets/images/smk62.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
    <?php 
    $pageTitle = 'Kelola Link Kegiatan';
    $showBackButton = true;
    $backUrl = 'dashboard.php';
    include '../includes/header.php'; 
    ?>
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">
                    <i class="fas fa-link"></i>
                    <?php echo $editLink ? 'Edit' : 'Tambah'; ?> Link Kegiatan
                </h1>
                <p class="card-subtitle">
                    <?php echo $editLink ? 'Ubah informasi link kegiatan' : 'Tambahkan link kegiatan baru ke database'; ?>
                </p>
            </div>
            
            <div class="card-body">
                <form method="POST" class="manage-form">
                    <?php if ($editLink): ?>
                    <input type="hidden" name="edit_index" value="<?php echo $editIndex; ?>">
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-heading"></i> Judul Kegiatan
                        </label>
                        <input type="text" 
                               name="title" 
                               class="form-control" 
                               placeholder="Contoh: Lomba 17 Agustus 2025"
                               value="<?php echo $editLink ? htmlspecialchars($editLink['title']) : ''; ?>"
                               required>
                        <small class="form-hint">
                            <i class="fas fa-info-circle"></i> 
                            Masukkan judul atau nama kegiatan
                        </small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-link"></i> URL Link
                        </label>
                        <input type="url" 
                               name="url" 
                               class="form-control" 
                               placeholder="https://drive.google.com/..."
                               value="<?php echo $editLink ? htmlspecialchars($editLink['url']) : ''; ?>"
                               required>
                        <small class="form-hint">
                            <i class="fas fa-info-circle"></i> 
                            Masukkan link lengkap dengan https://
                        </small>
                    </div>
                    
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> 
                            <?php echo $editLink ? 'Update' : 'Simpan'; ?> Link
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
</body>
</html>
