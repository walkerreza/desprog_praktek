<?php

function perkenalan($nama, $salam){
    echo $salam."," ;
    echo "assalamualaikum, ";
    echo "perkenalkan, nama saya $nama <br/>";
    echo "Senang berkenalan dengan Anda <br/>";

}

perkenalan("reza","hello");

echo "<hr>";
$saya = "reza";
$UcapkanSalam = "selamat pagi";


perkenalan($saya, $UcapkanSalam);

?>