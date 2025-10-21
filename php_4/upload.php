<?php

if(isset($_POST['submit'])){
    $targetdir = "uploads/";
    $targetfile = $targetdir. basename($_FILES["myfile"]["name"]);
    $filetype = strtolower(pathinfo($targetfile , PATHINFO_EXTENSION));
    
$allowedExtensions = array("txt", "pdf","doc","docx");
$maxsize = 3*1024*1024;
if (in_array($filetype, $allowedExtensions) && $_FILES["myfile"]["size"]<$maxsize)

    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
        echo "file berhasil di unggah";
        echo "<br><img src='$targetfile' alt='Uploaded Image' width='300'>";
    }
    else {
        echo "gagal mengunggah file";
    }
    else {
        echo "file tidak valid atau melebihi ukuran maksimum yang di izinkan";
    }

}

?>