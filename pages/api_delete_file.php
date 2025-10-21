<?php
/**
 * API untuk delete file di Google Drive
 */
require_once '../includes/config.php';

header('Content-Type: application/json');

// Check if user is logged in
if (!isLoggedIn()) {
    echo json_encode([
        'success' => false,
        'message' => 'Unauthorized. Please login.'
    ]);
    exit;
}

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method'
    ]);
    exit;
}

// Get parameters
$fileId = $_POST['fileId'] ?? '';

if (empty($fileId)) {
    echo json_encode([
        'success' => false,
        'message' => 'File ID is required'
    ]);
    exit;
}

try {
    $client = getGoogleClient();
    $service = new Google_Service_Drive($client);
    
    // Delete file
    $service->files->delete($fileId);
    
    echo json_encode([
        'success' => true,
        'message' => 'File berhasil dihapus'
    ]);
    
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error: ' . $e->getMessage()
    ]);
}
?>
