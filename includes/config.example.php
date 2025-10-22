<?php
// Google Drive API Configuration
define('GOOGLE_CLIENT_ID', 'YOUR_GOOGLE_CLIENT_ID_HERE');
define('GOOGLE_CLIENT_SECRET', 'YOUR_GOOGLE_CLIENT_SECRET_HERE');
define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/auth/callback.php');

// Google Drive Folder IDs
define('FOLDER_KESISWAAN', 'YOUR_KESISWAAN_FOLDER_ID');
define('FOLDER_KURIKULUM', 'YOUR_KURIKULUM_FOLDER_ID');
define('FOLDER_SAPRAS_HUMAS', 'YOUR_SAPRAS_HUMAS_FOLDER_ID');
define('FOLDER_TATA_USAHA', 'YOUR_TATA_USAHA_FOLDER_ID');

// Google Sheets ID for Links & Forms database
define('GOOGLE_SHEETS_ID', 'YOUR_GOOGLE_SHEETS_ID_HERE');

// JSON database file (legacy)
define('DB_FILE', __DIR__ . '/../data/database.json');

// Session configuration
if (session_status() == PHP_SESSION_NONE) {
    ini_set('session.gc_maxlifetime', 1800);
    ini_set('session.cookie_lifetime', 1800);
    session_start();
    
    if (!isset($_SESSION['created'])) {
        $_SESSION['created'] = time();
    } else if (time() - $_SESSION['created'] > 1800) {
        session_regenerate_id(true);
        $_SESSION['created'] = time();
    }
    
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1800)) {
        session_unset();
        session_destroy();
        session_start();
    }
    $_SESSION['last_activity'] = time();
}

function readDatabase() {
    if (!file_exists(DB_FILE)) {
        $defaultData = [
            'links' => [],
            'forms' => []
        ];
        saveDatabase($defaultData);
        return $defaultData;
    }
    
    $json = file_get_contents(DB_FILE);
    return json_decode($json, true);
}

// Fungsi untuk menyimpan database JSON
function saveDatabase($data) {
    $dir = dirname(DB_FILE);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    file_put_contents(DB_FILE, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// Google Sheets Functions

function getSheetsService() {
    $client = getGoogleClient();
    return new Google_Service_Sheets($client);
}

/**
 * Read all links from Google Sheets
 * Sheet: "Links" with columns: Title, URL, Created At, Updated At
 */
function getLinksFromSheets() {
    try {
        $service = getSheetsService();
        $spreadsheetId = GOOGLE_SHEETS_ID;
        $range = 'Links!A2:D'; // Skip header row
        
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();
        
        $links = [];
        if (empty($values)) {
            return $links;
        }
        
        foreach ($values as $row) {
            if (isset($row[0]) && isset($row[1])) { // At least title and URL
                $links[] = [
                    'title' => $row[0] ?? '',
                    'url' => $row[1] ?? '',
                    'created_at' => $row[2] ?? date('Y-m-d H:i:s'),
                    'updated_at' => $row[3] ?? null
                ];
            }
        }
        
        return $links;
    } catch (Exception $e) {
        error_log('Error reading links from Sheets: ' . $e->getMessage());
        return [];
    }
}

function getFormsFromSheets() {
    try {
        $service = getSheetsService();
        $spreadsheetId = GOOGLE_SHEETS_ID;
        $range = 'Forms!A2:D'; // Skip header row
        
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();
        
        $forms = [];
        if (empty($values)) {
            return $forms;
        }
        
        foreach ($values as $row) {
            if (isset($row[0]) && isset($row[1])) { // At least title and URL
                $forms[] = [
                    'title' => $row[0] ?? '',
                    'url' => $row[1] ?? '',
                    'created_at' => $row[2] ?? date('Y-m-d H:i:s'),
                    'updated_at' => $row[3] ?? null
                ];
            }
        }
        
        return $forms;
    } catch (Exception $e) {
        error_log('Error reading forms from Sheets: ' . $e->getMessage());
        return [];
    }
}

function addLinkToSheets($title, $url) {
    try {
        $service = getSheetsService();
        $spreadsheetId = GOOGLE_SHEETS_ID;
        $range = 'Links!A:D';
        
        $values = [
            [$title, $url, date('Y-m-d H:i:s'), '']
        ];
        
        $body = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
        
        $params = [
            'valueInputOption' => 'RAW'
        ];
        
        $result = $service->spreadsheets_values->append(
            $spreadsheetId,
            $range,
            $body,
            $params
        );
        
        return true;
    } catch (Exception $e) {
        error_log('Error adding link to Sheets: ' . $e->getMessage());
        return false;
    }
}

function addFormToSheets($title, $url) {
    try {
        $service = getSheetsService();
        $spreadsheetId = GOOGLE_SHEETS_ID;
        $range = 'Forms!A:D';
        
        $values = [
            [$title, $url, date('Y-m-d H:i:s'), '']
        ];
        
        $body = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
        
        $params = [
            'valueInputOption' => 'RAW'
        ];
        
        $result = $service->spreadsheets_values->append(
            $spreadsheetId,
            $range,
            $body,
            $params
        );
        
        return true;
    } catch (Exception $e) {
        error_log('Error adding form to Sheets: ' . $e->getMessage());
        return false;
    }
}

function updateLinkInSheets($index, $title, $url) {
    try {
        $service = getSheetsService();
        $spreadsheetId = GOOGLE_SHEETS_ID;
        $rowNumber = $index + 2; // +2 because: 1 for header, 1 for 0-based index
        $range = "Links!A{$rowNumber}:D{$rowNumber}";
        
        // Get existing created_at
        $existing = $service->spreadsheets_values->get($spreadsheetId, $range);
        $existingValues = $existing->getValues();
        $createdAt = $existingValues[0][2] ?? date('Y-m-d H:i:s');
        
        $values = [
            [$title, $url, $createdAt, date('Y-m-d H:i:s')]
        ];
        
        $body = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
        
        $params = [
            'valueInputOption' => 'RAW'
        ];
        
        $result = $service->spreadsheets_values->update(
            $spreadsheetId,
            $range,
            $body,
            $params
        );
        
        return true;
    } catch (Exception $e) {
        error_log('Error updating link in Sheets: ' . $e->getMessage());
        return false;
    }
}

function updateFormInSheets($index, $title, $url) {
    try {
        $service = getSheetsService();
        $spreadsheetId = GOOGLE_SHEETS_ID;
        $rowNumber = $index + 2; // +2 because: 1 for header, 1 for 0-based index
        $range = "Forms!A{$rowNumber}:D{$rowNumber}";
        
        // Get existing created_at
        $existing = $service->spreadsheets_values->get($spreadsheetId, $range);
        $existingValues = $existing->getValues();
        $createdAt = $existingValues[0][2] ?? date('Y-m-d H:i:s');
        
        $values = [
            [$title, $url, $createdAt, date('Y-m-d H:i:s')]
        ];
        
        $body = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
        
        $params = [
            'valueInputOption' => 'RAW'
        ];
        
        $result = $service->spreadsheets_values->update(
            $spreadsheetId,
            $range,
            $body,
            $params
        );
        
        return true;
    } catch (Exception $e) {
        error_log('Error updating form in Sheets: ' . $e->getMessage());
        return false;
    }
}

function deleteLinkFromSheets($index) {
    try {
        $service = getSheetsService();
        $spreadsheetId = GOOGLE_SHEETS_ID;
        
        // Get sheet ID for Links sheet
        $spreadsheet = $service->spreadsheets->get($spreadsheetId);
        $linksSheetId = null;
        foreach ($spreadsheet->getSheets() as $sheet) {
            if ($sheet->getProperties()->getTitle() === 'Links') {
                $linksSheetId = $sheet->getProperties()->getSheetId();
                break;
            }
        }
        
        if ($linksSheetId === null) {
            throw new Exception('Links sheet not found');
        }
        
        $rowNumber = $index + 1; // +1 for header row (0-based to 1-based)
        
        $requests = [
            new Google_Service_Sheets_Request([
                'deleteDimension' => [
                    'range' => [
                        'sheetId' => $linksSheetId,
                        'dimension' => 'ROWS',
                        'startIndex' => $rowNumber,
                        'endIndex' => $rowNumber + 1
                    ]
                ]
            ])
        ];
        
        $batchUpdateRequest = new Google_Service_Sheets_BatchUpdateSpreadsheetRequest([
            'requests' => $requests
        ]);
        
        $service->spreadsheets->batchUpdate($spreadsheetId, $batchUpdateRequest);
        return true;
    } catch (Exception $e) {
        error_log('Error deleting link from Sheets: ' . $e->getMessage());
        return false;
    }
}

function deleteFormFromSheets($index) {
    try {
        $service = getSheetsService();
        $spreadsheetId = GOOGLE_SHEETS_ID;
        
        // Get sheet ID for Forms sheet
        $spreadsheet = $service->spreadsheets->get($spreadsheetId);
        $formsSheetId = null;
        foreach ($spreadsheet->getSheets() as $sheet) {
            if ($sheet->getProperties()->getTitle() === 'Forms') {
                $formsSheetId = $sheet->getProperties()->getSheetId();
                break;
            }
        }
        
        if ($formsSheetId === null) {
            throw new Exception('Forms sheet not found');
        }
        
        $rowNumber = $index + 1; // +1 for header row (0-based to 1-based)
        
        $requests = [
            new Google_Service_Sheets_Request([
                'deleteDimension' => [
                    'range' => [
                        'sheetId' => $formsSheetId,
                        'dimension' => 'ROWS',
                        'startIndex' => $rowNumber,
                        'endIndex' => $rowNumber + 1
                    ]
                ]
            ])
        ];
        
        $batchUpdateRequest = new Google_Service_Sheets_BatchUpdateSpreadsheetRequest([
            'requests' => $requests
        ]);
        
        $service->spreadsheets->batchUpdate($spreadsheetId, $batchUpdateRequest);
        return true;
    } catch (Exception $e) {
        error_log('Error deleting form from Sheets: ' . $e->getMessage());
        return false;
    }
}

// Fungsi untuk mendapatkan Google Client
function getGoogleClient() {
    require_once __DIR__ . '/../vendor/autoload.php';
    
    $client = new Google_Client();
    $client->setClientId(GOOGLE_CLIENT_ID);
    $client->setClientSecret(GOOGLE_CLIENT_SECRET);
    $client->setRedirectUri(GOOGLE_REDIRECT_URI);
    $client->addScope(Google_Service_Drive::DRIVE_FILE);
    $client->addScope(Google_Service_Sheets::SPREADSHEETS);
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
    
    // Load previously authorized credentials from session
    if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
        $client->setAccessToken($_SESSION['access_token']);
    }
    
    // Refresh the token if it's expired
    if ($client->isAccessTokenExpired()) {
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            $_SESSION['access_token'] = $client->getAccessToken();
        }
    }
    
    return $client;
}

// Fungsi untuk check apakah user sudah login Google
function isLoggedIn() {
    if (!isset($_SESSION['access_token'])) {
        return false;
    }
    
    // Cek apakah session sudah timeout
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1800)) {
        // Session timeout - redirect ke login
        logoutUser(true);
        return false;
    }
    
    try {
        $client = getGoogleClient();
        if ($client->isAccessTokenExpired()) {
            // Access token expired - logout
            logoutUser(false);
            return false;
        }
        return true;
    } catch (Exception $e) {
        return false;
    }
}

// Fungsi untuk logout user
function logoutUser($isTimeout = false) {
    $_SESSION = array();
    
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-3600, '/');
    }
    
    session_destroy();
    
    // Redirect ke login dengan parameter
    $redirect = dirname($_SERVER['PHP_SELF']);
    $redirect = str_replace('/pages', '', $redirect);
    $redirect = str_replace('/includes', '', $redirect);
    
    if ($isTimeout) {
        header('Location: ' . '/Data-Base-Guru/auth/login.php?session_timeout=1');
    } else {
        header('Location: ' . '/Data-Base-Guru/auth/login.php');
    }
    exit;
}

// Kategori Database
function getDatabaseCategories() {
    return [
        'kurikulum' => [
            'name' => 'Kurikulum',
            'icon' => 'fa-book',
            'folder_id' => FOLDER_KURIKULUM,
            'color' => '#4a90e2'
        ],
        'kesiswaan' => [
            'name' => 'Kesiswaan',
            'icon' => 'fa-users',
            'folder_id' => FOLDER_KESISWAAN,
            'color' => '#50e3c2'
        ],
        'sapras_humas' => [
            'name' => 'Sapras & Humas',
            'icon' => 'fa-building',
            'folder_id' => FOLDER_SAPRAS_HUMAS,
            'color' => '#f39c12'
        ],
        'tata_usaha' => [
            'name' => 'Tata Usaha',
            'icon' => 'fa-file-invoice',
            'folder_id' => FOLDER_TATA_USAHA,
            'color' => '#e74c3c'
        ]
    ];
}
?>
