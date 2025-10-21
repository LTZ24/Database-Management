<?php
/**
 * API Endpoint untuk mendapatkan file list dari Google Drive
 * Digunakan untuk AJAX lazy loading
 */

header('Content-Type: application/json');
require_once '../includes/config.php';

// Check if user logged in
if (!isLoggedIn()) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized', 'message' => 'Please login first']);
    exit;
}

// Get category parameter
$cat = $_GET['cat'] ?? '';
$categories = getDatabaseCategories();

if (!isset($categories[$cat])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid category', 'message' => 'Category not found']);
    exit;
}

$category = $categories[$cat];

// Get files from Google Drive
try {
    $client = getGoogleClient();
    $service = new Google_Service_Drive($client);
    
    $response = $service->files->listFiles([
        'q' => "'" . $category['folder_id'] . "' in parents and trashed=false",
        'pageSize' => 100,
        'orderBy' => 'createdTime desc',
        'fields' => 'files(id, name, mimeType, size, createdTime, modifiedTime, webViewLink, iconLink, thumbnailLink)'
    ]);
    
    $files = $response->getFiles();
    $fileList = [];
    
    foreach ($files as $file) {
        $fileList[] = [
            'id' => $file->getId(),
            'name' => $file->getName(),
            'mimeType' => $file->getMimeType(),
            'size' => $file->getSize(),
            'createdTime' => $file->getCreatedTime(),
            'modifiedTime' => $file->getModifiedTime(),
            'webViewLink' => $file->getWebViewLink(),
            'iconLink' => $file->getIconLink(),
            'thumbnailLink' => $file->getThumbnailLink()
        ];
    }
    
    echo json_encode([
        'success' => true,
        'category' => $cat,
        'categoryName' => $category['name'],
        'files' => $fileList,
        'totalFiles' => count($fileList)
    ]);
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Server Error',
        'message' => $e->getMessage()
    ]);
}
?>
