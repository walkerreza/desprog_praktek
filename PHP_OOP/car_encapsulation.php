<?php

// Class Car dengan Encapsulation
class Car
{
    private $model;
    private $color;
    
    // Constructor
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }
    
    // Getter untuk model
    public function getModel()
    {
        return $this->model;
    }
    
    // Setter untuk color
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    // Getter untuk color
    public function getColor()
    {
        return $this->color;
    }
}

// Membuat object Car
$car = new Car("Toyota", "Blue");

// Menampilkan data awal
echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";

// Mengubah warna menggunakan setter
$car->setColor("Red");

// Menampilkan data setelah diubah
echo "Updated Color: " . $car->getColor() . "<br>";

?>
