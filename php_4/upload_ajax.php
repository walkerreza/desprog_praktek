<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    
    $array = explode('.', $file_name);
    $file_ext = strtolower(end($array));

    $extensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($file_ext,$extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah gambar (jpg, jpeg, png, gif)";
    }
    if ($file_size > 2097152) {
        $errors[] = "Ukuran file tidak boleh melebihi 2MB";
    }
    
    if (empty($errors) == true) {
        $targetdir = "images/";
        if(!is_dir($targetdir)){
            mkdir($targetdir, 0777, true);
        }
        move_uploaded_file($file_tmp, $targetdir.$file_name);
        echo "File berhasil diunggah";
    }else {
        echo implode(" ", $errors);
    }
} else {
    echo "Tidak ada file yang dipilih";
}