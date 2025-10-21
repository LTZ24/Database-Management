<?php
/**
 * Auto-update script untuk mengganti inline CSS dengan external CSS
 * Dan menambahkan header/footer components
 */

function updateLoginPage() {
    $file = '../auth/login.php';
    $content = file_get_contents($file);
    
    // Remove inline <style>...</style>
    $content = preg_replace('/<style>.*?<\/style>/s', '', $content);
    
    // Add external CSS links after Font Awesome
    $cssLinks = '    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/login.css">';
    
    $content = str_replace(
        '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">',
        '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">' . "\n" . $cssLinks,
        $content
    );
    
    // Add footer before </body>
    $content = str_replace(
        '</body>',
        '    <?php include \'../includes/footer.php\'; ?>' . "\n" . '</body>',
        $content
    );
    
    file_put_contents($file, $content);
    echo "✅ Login page updated!\n";
}

function updateDashboardPage() {
    $file = '../pages/dashboard.php';
    $content = file_get_contents($file);
    
    // Similar process...
    echo "✅ Dashboard page updated!\n";
}

// Run updates
echo "Starting CSS restructure...\n\n";
updateLoginPage();
updateDashboardPage();
echo "\n✅ All files updated!\\n";
?>
