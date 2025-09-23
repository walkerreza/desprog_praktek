<?php
$nilaiNumerik = 80;



if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "nilai huruf: A ";

}
elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90){
    echo "nilai huruf : B";

}
elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "nilai huruf : C";

}
elseif($nilaiNumerik >= 60 && $nilaiNumerik < 70){
    echo "nilai huruf : D";

}
else if ($nilaiNumerik < 60){
    echo "dongo";
}


$jarakTarget = 500;
$jarakSaatIni = 0;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo " <br>atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer ";



$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <=  $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);

}

echo "<br> jumlah buah yang akan dipanen adalah: $jumlahBuah";


$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "<br>  total skor ujian adalah : $totalSkor";




$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];

foreach ($nilaiSiswa as $nilai)
{
    if ($nilai < 60) {
        echo "nilai : $nilai (tidak lulus) <br>";
        continue;
    }
    echo "<br>nilai: $nilai (lulus) <br>";
}
?>