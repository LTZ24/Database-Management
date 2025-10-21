<?php
/**
 * API untuk rename file di Google Drive
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
$newName = $_POST['newName'] ?? '';

if (empty($fileId) || empty($newName)) {
    echo json_encode([
        'success' => false,
        'message' => 'File ID and new name are required'
    ]);
    exit;
}

try {
    $client = getGoogleClient();
    $service = new Google_Service_Drive($client);
    
    // Update file metadata
    $file = new Google_Service_Drive_DriveFile();
    $file->setName($newName);
    
    $updatedFile = $service->files->update($fileId, $file, [
        'fields' => 'id, name, mimeType, size, createdTime, modifiedTime'
    ]);
    
    echo json_encode([
        'success' => true,
        'message' => 'File berhasil di-rename',
        'file' => [
            'id' => $updatedFile->getId(),
            'name' => $updatedFile->getName(),
            'mimeType' => $updatedFile->getMimeType(),
            'size' => $updatedFile->getSize(),
            'createdTime' => $updatedFile->getCreatedTime(),
            'modifiedTime' => $updatedFile->getModifiedTime()
        ]
    ]);
    
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Error: ' . $e->getMessage()
    ]);
}
?>
