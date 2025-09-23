<?php


$hargaAsli = 120000;
$syaratDiskon = 100000;  
$persenDiskon = 20;      

echo "<h2>Perhitungan Diskon Produk</h2>";
echo "<p><strong>Harga Asli Produk:</strong> Rp " . number_format($hargaAsli, 0, ',', '.') . "</p>";
echo "<p><strong>Syarat Diskon:</strong> Pembelian di atas Rp " . number_format($syaratDiskon, 0, ',', '.') . "</p>";
echo "<p><strong>Besar Diskon:</strong> $persenDiskon%</p>";
echo "<br>";


if ($hargaAsli > $syaratDiskon) {
    echo "<p>Status: Memenuhi syarat diskon (Rp " . number_format($hargaAsli, 0, ',', '.') . " > Rp " . number_format($syaratDiskon, 0, ',', '.') . ")</p>";
    
    
    $nominalDiskon = ($persenDiskon / 100) * $hargaAsli;
    
  
    $hargaSetelahDiskon = $hargaAsli - $nominalDiskon;
    
    echo "<p><strong>Nominal Diskon:</strong> Rp " . number_format($nominalDiskon, 0, ',', '.') . "</p>";
    echo "<p><strong>Harga Setelah Diskon:</strong> Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "</p>";
    
   
    echo "<br>";
    echo "<h3>Ringkasan Pembayaran:</h3>";
    echo "<p>Harga Asli: Rp " . number_format($hargaAsli, 0, ',', '.') . "</p>";
    echo "<p>Diskon ($persenDiskon%): - Rp " . number_format($nominalDiskon, 0, ',', '.') . "</p>";
    echo "<p><strong>Total Bayar: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "</strong></p>";
    echo "<p style='color: green;'><strong>Penghematan: Rp " . number_format($nominalDiskon, 0, ',', '.') . "</strong></p>";
    echo "</div>";
    
} else {
    echo "<p><strong>Status:</strong>  Tidak memenuhi syarat diskon</p>";
    echo "<p><strong>Harga yang harus dibayar:</strong> Rp " . number_format($hargaAsli, 0, ',', '.') . " (tanpa diskon)</p>";
}

?>
