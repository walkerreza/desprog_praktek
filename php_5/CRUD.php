<?php
include 'koneksi.php'; // pastikan file koneksi sudah dibuat

$sql = "CREATE TABLE user (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";

if (mysqli_query($koneksi, $sql)) {
    echo "Tabel 'user' berhasil dibuat.";
} else {
    echo "Error membuat tabel: " . mysqli_error($koneksi);
}



$sql = "INSERT INTO user (username, password) VALUES ('admin', '123')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil dimasukkan ke tabel user.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}


?>
