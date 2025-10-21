<!-- <?php
// for ($i=1; $i<=35; $i++){
//     echo "perulangan ke {$i}<br/>";

// }
?> -->


<?php
function tampilkanAngka(int $jumlah, int $indeks = 1){
    echo "perulangan ke - ($indeks)<br/>";

    if ($indeks < $jumlah){
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);



?>