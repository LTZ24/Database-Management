<?php
require_once '../includes/config.php';

$client = getGoogleClient();

// Handle OAuth callback
if (isset($_GET['code'])) {
    try {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        
        if (isset($token['error'])) {
            die('Error: ' . $token['error_description']);
        }
        
        $_SESSION['access_token'] = $token;
        
        // Redirect ke dashboard
        header('Location: ../pages/dashboard.php');
        exit;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
} else {
    die('Error: No authorization code received');
}
?>
