<?php
$loremipsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Voluptates reprehenderit nobis expedita tempore vel officia commodi fugiat molestiae 
laborum unde ipsum voluptatum, corrupti minus sit excepturi nostrum 
exercitationem! Quas impedit autem nulla optio.";

echo "<p>{$loremipsum}</p>";
echo "Panjang karakter: " . strlen($loremipsum) . "<br>";
echo "Jumlah kata: " . str_word_count($loremipsum) . "<br>";
echo "<p>" . strtoupper($loremipsum) . "</p>";
echo "<p>" . strtolower($loremipsum) . "</p>";
?>