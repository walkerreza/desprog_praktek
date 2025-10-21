<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Asalamualaikum"){
    echo $salam."," ;
    echo "perkenalkan, nama saya ". $nama." <br/>";

    echo "saya berusia ". hitungUmur(2005, 2025) ." tahun <br/>";
    echo "senang berkenalan dengan anda <br/>";
}

perkenalan("reza","hallo")       


?>