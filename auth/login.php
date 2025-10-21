<?php
require_once '../includes/config.php';

// Jika sudah login, redirect ke dashboard
if (isLoggedIn()) {
    header('Location: ../pages/dashboard.php');
    exit;
}

// Check apakah konfigurasi sudah diisi
$configError = null;
if (GOOGLE_CLIENT_ID === 'YOUR_CLIENT_ID_HERE' || GOOGLE_CLIENT_SECRET === 'YOUR_CLIENT_SECRET_HERE') {
    $configError = 'Konfigurasi Google API belum disetup. Silakan edit file config.php dan isi GOOGLE_CLIENT_ID dan GOOGLE_CLIENT_SECRET.';
}

$authUrl = '#';
if (!$configError) {
    try {
        $client = getGoogleClient();
        $authUrl = $client->createAuthUrl();
    } catch (Exception $e) {
        $configError = 'Error: ' . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Database SMKN 62 Jakarta</title>
    <link rel="icon" type="image/png" href="../assets/images/smk62.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="login-container">
        <img src="../assets/images/smk62.png" alt="Logo SMKN 62 Jakarta" class="logo">
        <h1>Login Administrator</h1>
        <p class="subtitle">Database Management SMKN 62 Jakarta</p>
        
        <?php if (isset($_GET['logged_out'])): ?>
        <div class="alert alert-success mb-20">
            <i class="fas fa-check-circle"></i> Anda telah berhasil logout. Silakan login kembali untuk mengakses sistem.
        </div>
        <?php endif; ?>
        
        <?php if (isset($_GET['session_timeout'])): ?>
        <div class="alert alert-warning mb-20">
            <i class="fas fa-clock"></i> Session Anda telah berakhir. Silakan login kembali.
        </div>
        <?php endif; ?>
        
        <?php if ($configError): ?>
        <div class="alert alert-danger">
            <h4><i class="fas fa-exclamation-triangle"></i> Konfigurasi Belum Lengkap</h4>
            <p><?php echo htmlspecialchars($configError); ?></p>
            <p><strong>Langkah-langkah:</strong></p>
            <ol class="mt-10" style="margin-left: 20px; font-size: 13px;">
                <li>Buka <code>includes/config.php</code></li>
                <li>Edit baris 8-9: isi <code>GOOGLE_CLIENT_ID</code> dan <code>GOOGLE_CLIENT_SECRET</code></li>
                <li>Lihat <code>README.md</code> untuk panduan lengkap setup Google Drive API</li>
            </ol>
        </div>
        <?php endif; ?>
        
        <a href="<?php echo htmlspecialchars($authUrl); ?>" class="google-btn <?php echo $configError ? 'disabled' : ''; ?>" <?php echo $configError ? 'onclick="return false;"' : ''; ?>>
            <svg class="google-icon" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            Login dengan Google
        </a>
        
        <div class="info-box">
            <h3><i class="fas fa-info-circle"></i> Fitur Sistem:</h3>
            <ul>
                <li><i class="fas fa-folder"></i> Manajemen folder database (Kurikulum, Kesiswaan, Sapras & Humas, Tata Usaha)</li>
                <li><i class="fas fa-cloud-upload-alt"></i> Upload file ke Google Drive</li>
                <li><i class="fas fa-link"></i> Kelola link kegiatan</li>
                <li><i class="fab fa-google"></i> Kelola Google Forms</li>
            </ul>
        </div>

    </div>
    
    <?php include '../includes/footer.php'; ?>
</body>
</html>
