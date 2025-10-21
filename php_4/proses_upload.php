<?php 

$targetDirectory = "images/";

if (!file_exists($targetDirectory)){
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES ['images']['name'] [0]) {
    $totalfiles = count($_FILES['images']['name']);

    for ($i = 0; $i < $totalfiles; $i++){
        $filename = $_FILES['images']['name'][$i];
        $targetfile = $targetDirectory . $filename;

        if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetfile)){
            echo "File $filename berhasil diunggah <br>";
            echo "<br> <img src = $targetfile width = '300'>";
        }else {
            echo " Gagal mengunggah file $filename. <br>";
        }
    }

} else {
    echo "Tidak ada file yang diunggah.";
}