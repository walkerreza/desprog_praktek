    <!-- <?php
    $pattern = '/[a-z]/';
    $text = 'this is sample text';

    if (preg_match($pattern, $text)) {
        echo "huruf kecil ditemukan";
    } else {
        echo "tidak ada huruf kecil";
    }

    ?>  


<?php
$pattern = '/[0-9]+/';
$text = 'there are 123 apples.';
if (preg_match ($pattern, $text,$matches)) {
    echo "<br>";
    echo "cocokkan : " . $matches[0];
}else {
    echo "<br>";
    echo "tidak ada yang cocok";
}

?>

<?php
$pattern ='/apple/';
$replacement = 'banana';

$text = "i like apple pie";
$newText = preg_replace($pattern, $replacement, $text);

echo "<br>";    
echo $newText;

?>

<?php
$pattern = '/go*d/';
$text = 'god is good';

if (preg_match($pattern, $text, $matches)) {
    echo "<br>";
    echo "cocokkan : " . $matches[0];
}else {
    echo "<br>";
    echo "tidak ada yang cocok";
}

?> -->

<!-- Soal 5.5: Menggunakan ? (0 atau 1 kali) -->
<!-- <?php

$pattern = '/gu?d/';
$text = 'gud is gus';

if (preg_match($pattern, $text, $matches)) {
    echo "cocokkan : " . $matches[0];
}else {
    echo "tidak ada yang cocok";
}

?> -->

<!-- Soal 5.6: Menggunakan {n,m} (minimal n, maksimal m kali) -->
<?php

$pattern = '/go{1,2}d/';
$text = 'god is good';

if (preg_match($pattern, $text, $matches)) {
    echo "cocokkan : " . $matches[0];
}else {
    echo "tidak ada yang cocok";
}

?>