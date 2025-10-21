<?php
/**
 * File Test Koneksi Database
 * Mengecek apakah koneksi ke database berhasil
 */

// Include file koneksi
require_once 'koneksi.php';

// Jika sampai di sini berarti koneksi berhasil
echo "<h2>✅ Test Koneksi Database</h2>";
echo "<p><strong>Status:</strong> Koneksi berhasil!</p>";
echo "<p><strong>Host:</strong> " . DB_HOST . "</p>";
echo "<p><strong>Database:</strong> " . DB_NAME . "</p>";
echo "<p><strong>User:</strong> " . DB_USER . "</p>";

// Test query sederhana
$result = $conn->query("SELECT VERSION() as version");
if ($result) {
    $row = $result->fetch_assoc();
    echo "<p><strong>MySQL Version:</strong> " . $row['version'] . "</p>";
}

// Tutup koneksi
$conn->close();
echo "<p style='color: green;'>Koneksi ditutup dengan baik.</p>";
?>
