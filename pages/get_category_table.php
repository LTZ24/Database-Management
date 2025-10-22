<?php
require_once '../includes/config.php';

// Check if logged in
if (!isLoggedIn()) {
    http_response_code(403);
    echo '<div class="alert alert-danger"><i class="fas fa-lock"></i> Anda harus login terlebih dahulu</div>';
    exit;
}

// Get category from parameter
$category = $_GET['cat'] ?? '';

if (empty($category)) {
    echo '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Kategori tidak valid</div>';
    exit;
}

$categories = getDatabaseCategories();

if (!isset($categories[$category])) {
    echo '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Kategori tidak ditemukan</div>';
    exit;
}

$categoryData = $categories[$category];
$folderId = $categoryData['folder_id'];
?>

<div id="tableLoadingState">
    <div class="loading">
        <i class="fas fa-spinner fa-spin"></i> Memuat data dari Google Drive...
    </div>
</div>

<div id="tableContentArea" style="display: none;">
    <!-- Filter Section -->
    <div class="filter-section">
        <div class="filter-group">
            <label><i class="fas fa-filter"></i> Filter:</label>
            <select id="popup-filter" class="filter-select">
                <option value="latest">Terbaru</option>
                <option value="oldest">Terlama</option>
                <option value="a-z">A-Z</option>
                <option value="z-a">Z-A</option>
            </select>
            
            <div class="date-filter-group">
                <label><i class="fas fa-calendar-alt"></i> Tanggal:</label>
                <input type="date" id="popup-date-filter" class="date-input" placeholder="Pilih tanggal">
                <button type="button" id="popup-clear-date" class="btn-clear-date" title="Hapus filter tanggal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Data Table -->
    <div class="data-table-container" id="popup-table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th class="col-no">No</th>
                    <th class="col-title">Nama File</th>
                    <th class="col-meta">Ukuran</th>
                    <th class="col-meta">Tanggal Upload</th>
                    <th class="col-actions">Aksi</th>
                </tr>
            </thead>
            <tbody id="popup-tbody">
                <!-- Data will be loaded via AJAX -->
            </tbody>
        </table>
    </div>

    <div id="emptyStatePopup" class="empty-state" style="display: none;">
        <i class="fas fa-inbox"></i>
        <p>Folder ini masih kosong. Belum ada file yang diupload.</p>
    </div>

    <!-- Pagination Controls -->
    <div class="table-controls">
        <div class="per-page-control">
            <label>Tampilkan:</label>
            <select id="popup-per-page" class="per-page-select">
                <option value="5">5</option>
                <option value="10" selected>10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
            <span>data</span>
        </div>
        <div class="pagination" id="popup-pagination"></div>
    </div>
</div>

<!-- Store category info for JavaScript -->
<div id="popup-category-data" 
     data-category="<?php echo htmlspecialchars($category); ?>"
     data-color="<?php echo htmlspecialchars($categoryData['color']); ?>"
     style="display: none;">
</div>
