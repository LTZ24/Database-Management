<?php
/**
 * Index - Entry Point Aplikasi
 * Database Management SMKN 62 Jakarta
 * 
 * Redirect otomatis ke login page
 * Hanya user yang sudah login yang bisa mengakses aplikasi
 */

session_start();

// Cek apakah user sudah login
if (isset($_SESSION['access_token']) && !empty($_SESSION['access_token'])) {
    // Jika sudah login, redirect ke dashboard
    header('Location: pages/dashboard.php');
    exit;
}

// Jika belum login, redirect ke halaman login
header('Location: auth/login.php');
exit;
?>
