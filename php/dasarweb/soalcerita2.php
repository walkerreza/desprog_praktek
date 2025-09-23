<?php


$siswa = 10;
$nilaisiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];


$max1 = $nilaisiswa[0]; 
$max2 = $nilaisiswa[1];  
$min1 = $nilaisiswa[0];  
$min2 = $nilaisiswa[1];  


if ($max2 > $max1) {
    $temp = $max1;
    $max1 = $max2;
    $max2 = $temp;
}

if ($min2 < $min1) {
    $temp = $min1;
    $min1 = $min2;
    $min2 = $temp;
}


foreach ($nilaisiswa as $nilai) {

    if ($nilai > $max1) {
        $max2 = $max1;
        $max1 = $nilai; 
    }
    elseif ($nilai > $max2 && $nilai != $max1) {
        $max2 = $nilai;
    }


    if ($nilai < $min1) {
        $min2 = $min1;
        $min1 = $nilai;
    }
    elseif ($nilai < $min2 && $nilai != $min1) {
        $min2 = $nilai;
    }
}


$totalSemuaNilai = array_sum($nilaisiswa);


$totalNilaiAkhir = $totalSemuaNilai - $max1 - $max2 - $min1 - $min2;


$jumlahNilaiTersisa = $siswa - 4; 
$rataRata = $totalNilaiAkhir / $jumlahNilaiTersisa;

echo "<h2>Hasil Perhitungan Nilai Siswa</h2>";
echo "<p><strong>Daftar Nilai:</strong> " . implode(", ", $nilaisiswa) . "</p>";
echo "<p><strong>Total Semua Nilai:</strong> $totalSemuaNilai</p>";
echo "<br>";

echo "<p><strong>2 Nilai Tertinggi yang Diabaikan:</strong></p>";
echo "<ul>";
echo "<li>Tertinggi 1: $max1</li>";
echo "<li>Tertinggi 2: $max2</li>";
echo "</ul>";

echo "<p><strong>2 Nilai Terendah yang Diabaikan:</strong></p>";
echo "<ul>";
echo "<li>Terendah 1: $min1</li>";
echo "<li>Terendah 2: $min2</li>";
echo "</ul>";

echo "<p><strong>Total Nilai yang Diabaikan:</strong> " . ($max1 + $max2 + $min1 + $min2) . "</p>";
echo "<p><strong>Total Nilai Setelah Mengabaikan:</strong> $totalNilaiAkhir</p>";
echo "<p><strong>Jumlah Nilai yang Dihitung:</strong> $jumlahNilaiTersisa nilai</p>";
echo "<p><strong>Rata-rata Akhir:</strong> " . number_format($rataRata, 2) . "</p>";
?>