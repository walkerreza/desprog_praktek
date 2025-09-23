<?php

$a = 100;
$b = 100;


$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilAtauSama = $a <= $b;
$hasilLebihBesarAtauSama = $a >= $b;
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNota = !$a;
$hasilNotB = !$b;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;





echo "matematika dari $a dan $b . <br> ";

echo "hasil dari tambah :" . $hasilTambah . "<br>";
echo "hasil dari kurang : " . $hasilKurang . "<br>";
echo "hasil dari kali : " . $hasilKali . "<br>";
echo "hasil dari bagi : " . $hasilBagi . "<br>";    

echo "pangkatnya adalah :" . $pangkat . "<br>";

var_dump($sisaBagi);

echo "<br> hasil sama :" . $hasilSama . "<br>";
echo "hasil tidak sama :" . $hasilTidakSama . "<br>";
echo "hasil lebih kecil :" . $hasilLebihKecil . "<br>";
echo "hasil lebih besar :" . $hasilLebihBesar . "<br>";
echo "hasil lebih kecil atau sama :" . $hasilLebihKecilAtauSama . "<br>";
echo "hasil lebih besar atau sama :" . $hasilLebihBesarAtauSama . "<br>";
echo "hasil and :" . $hasilAnd . "<br>";
echo "hasil or :" . $hasilOr . "<br>";
echo "hasil not a :" . $hasilNota . "<br>";
echo "hasil not b :" . $hasilNotB . "<br>";

echo "hasil a += b :" . ($a + $b) . "<br>";
echo "hasil a -= b :" . ($a - $b) . "<br>";
echo "hasil a *= b :" . ($a * $b) . "<br>";
echo "hasil a %= b :" . ($a % $b) . "<br>";

// echo "hasil identik :". $hasilIdentik . "<br>";
// echo "hasil tidak identik :". $hasilTidakIdentik . "<br>";
