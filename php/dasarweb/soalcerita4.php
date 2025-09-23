<?php

$poinPemain = 650;  
$syaratHadiah = 500;


echo "Total skor pemain adalah: " . $poinPemain . "\n";

if ($poinPemain > $syaratHadiah) {
    echo "<br>Apakah pemain mendapatkan hadiah tambahan? YA\n";
} else {
    echo "<br>  Apakah pemain mendapatkan hadiah tambahan? TIDAK\n";
}


// echo "<hr>";
// echo "<h3>Testing dengan Berbagai Skenario:</h3>";

// $contohPoin = [300, 500, 501, 750, 1000, 50];

// echo "<table width: 100%;'>";
// echo "<tr style='background-color: #f2f2f2;'>";
// echo "<th>Poin</th><th>Total Skor</th><th>Hadiah Tambahan?</th><th>Status</th>";
// echo "</tr>";

// foreach ($contohPoin as $poin) {
//     $hadiahTambahan = ($poin > $syaratHadiah) ? "YA" : "TIDAK";
//     $status = ($poin > $syaratHadiah) ? "memenuhi syarat" : " Belum memenuhi";
//     $warnaBaris = ($poin > $syaratHadiah) ? "#e8f5e8" : "#ffe8e8";
    
//     echo "<tr style='background-color: $warnaBaris;'>";
//     echo "<td style='text-align: center; padding: 8px;'>$poin</td>";
//     echo "<td style='text-align: center; padding: 8px;'>Total skor pemain adalah: $poin</td>";
//     echo "<td style='text-align: center; padding: 8px;'>Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan</td>";
//     echo "<td style='text-align: center; padding: 8px;'>$status</td>";
//     echo "</tr>";
// }

// echo "</table>";
?>