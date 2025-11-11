<?php

// Class Car dengan Constructor dan Destructor
class Car
{
    private $brand;
    
    // Constructor - dipanggil saat object dibuat
    public function __construct($brand)
    {
        echo "A new car is created.<br>";
        $this->brand = $brand;
    }
    
    // Getter untuk brand
    public function getBrand()
    {
        return $this->brand;
    }
    
    // Destructor - dipanggil saat object dihancurkan
    public function __destruct()
    {
        echo "The car is destroyed.<br>";
    }
}

// Membuat object Car
$car = new Car("Toyota");

// Menampilkan brand
echo "Brand: " . $car->getBrand() . "<br>";

// Destructor akan otomatis dipanggil di akhir script

?>
