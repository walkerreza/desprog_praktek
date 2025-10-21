<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title></title>
        <link rel="stylesheet" href="array2.css" />
    </head>
    <body>
        <div class="card">
        <?php
        $Dosen = [
            'nama' => 'elok nur hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'perempuan'
        
        ];
        echo "Nama : {$Dosen['nama']}<br>";
        echo "Domisili : {$Dosen['domisili']}<br>";
        echo "Jenis Kelamin : {$Dosen['jenis_kelamin']}<br>";
        ?>
    </body>
</html>