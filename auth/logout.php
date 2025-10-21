<?php
/**
 * Logout Handler
 * Menghapus semua session dan redirect ke login
 */

require_once '../includes/config.php';

// Unset semua session variables
$_SESSION = array();

// Hapus session cookie jika ada
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

// Destroy session
session_destroy();

// Redirect ke login dengan pesan
header('Location: ../auth/login.php?logged_out=1');
exit;
?>
