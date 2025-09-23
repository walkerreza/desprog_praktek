<?php

$kursiResto = 45;
$namaResto = "lalapan godong blarak";

$OrangPesen = 1;
$KursiKosong = $kursiResto - $OrangPesen;

$presentaseKursiKosong = ($KursiKosong / $kursiResto) * 100;

echo ("kursi kosong :" . $presentaseKursiKosong . "%")

?>

