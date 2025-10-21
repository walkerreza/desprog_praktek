<?php
/**
 * File Koneksi Database
 * Mengelola koneksi ke database MySQL menggunakan MySQLi
 */

// Konfigurasi Database
define('DB_HOST', 'localhost');     // Host database
define('DB_USER', 'root');          // Username database
define('DB_PASS', '');              // Password database
define('DB_NAME', 'praktekwebdb');     // Nama database

// Membuat koneksi ke database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Cek koneksi
if ($conn->connect_error) {
    // Jika koneksi gagal, tampilkan error dan hentikan script
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Set charset ke UTF-8 untuk mendukung karakter internasional
$conn->set_charset("utf8");

// Koneksi berhasil (opsional: bisa dihapus di production)
// echo "Koneksi database berhasil!";
?>