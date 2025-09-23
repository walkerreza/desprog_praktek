<?php

$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10*5);
$e = $d + $c;

echo "variable a: {$a} <br>";
echo "variable a: {$b} <br>";
echo "variable a: {$c} <br>";
echo "variable a: {$d} <br>";
echo "variable a: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matermatika : {$nilaiMatematika} <br>";
echo "IPA : {$nilaiIPA} <br>";
echo "Bahasa Indonesia : {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata : {$rataRata} <br>";

var_dump($rataRata);


$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

$namaDepan = "ibnu";
$namaBelakang = 'jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . " " . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: '. $namaBelakang. '<br>';
echo $namaLengkap;

$listMahasiswa = ["wahid Abdullah", "Elmo bachtiar", "lendis fabri"];
echo $listMahasiswa[0]


?>

