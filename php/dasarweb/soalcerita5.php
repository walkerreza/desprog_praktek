<?php


echo "Daftar Nilai Siswa - Ujian Matematika\n\n";


$dataSiswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];


echo "<br>Data Semua Siswa:\n";
$totalNilai = 0;
$jumlahSiswa = count($dataSiswa);

foreach ($dataSiswa as $siswa) {
    echo "- " . $siswa[0] . ": " . $siswa[1] . "\n";
    $totalNilai += $siswa[1];
}


$rataRata = $totalNilai / $jumlahSiswa;
echo "<br>\nTotal Nilai: " . $totalNilai . "\n";
echo "<br>Jumlah Siswa: " . $jumlahSiswa . "\n";
echo "<br>Rata-rata Kelas: " . number_format($rataRata, 2) . "\n";


echo "<br>\nSiswa dengan Nilai di Atas Rata-rata (" . number_format($rataRata, 2) . "):\n";

$siswaLulusRataRata = [];
foreach ($dataSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        $siswaLulusRataRata[] = $siswa;
        echo "- " . $siswa[0] . ": " . $siswa[1] . "\n";
    }
}


echo "<br>\nRingkasan:\n";
echo "<br>- Jumlah siswa yang di atas rata-rata: " . count($siswaLulusRataRata) . " dari " . $jumlahSiswa . " siswa\n";
echo "<br>- Persentase: " . number_format((count($siswaLulusRataRata) / $jumlahSiswa) * 100, 1) . "%\n";
?>