<?php
$pageTitle = $pageTitle ?? 'Dashboard';
$showBackButton = $showBackButton ?? false;
$backUrl = $backUrl ?? 'dashboard.php';
?>
<nav class="navbar">
    <div class="navbar-brand">
        <img src="../assets/images/smk62.png" alt="Logo SMKN 62 Jakarta">
        <h2><?php echo htmlspecialchars($pageTitle); ?></h2>
    </div>
    <div class="navbar-menu">
        <?php if ($showBackButton): ?>
        <a href="<?php echo htmlspecialchars($backUrl); ?>" class="btn btn-primary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        <?php endif; ?>
        <a href="../auth/logout.php" class="btn btn-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
</nav>
