<?php

// Class Animal dengan berbagai tingkat visibility
class Animal
{
    public $name;           // Public - bisa diakses dari mana saja
    protected $age;         // Protected - hanya bisa diakses dari class ini dan turunannya
    private $color;         // Private - hanya bisa diakses dari class ini saja
    
    // Constructor
    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
    
    // Public method - bisa diakses dari mana saja
    public function getName()
    {
        return $this->name;
    }
    
    // Protected method - hanya bisa diakses dari class ini dan turunannya
    protected function getAge()
    {
        return $this->age;
    }
    
    // Private method - hanya bisa diakses dari class ini saja
    private function getColor()
    {
        return $this->color;
    }
    
    // Public method untuk mengakses private method
    public function displayColor()
    {
        return $this->getColor();
    }
}

// Membuat object Animal
$animal = new Animal("Dog", 3, "Brown");

// Menampilkan data
echo "Name: " . $animal->name . "<br>";              // Bisa akses langsung karena public
echo "Age: " . $animal->getName() . "<br>";          // Akses melalui method public
echo "Color: " . $animal->displayColor() . "<br>";   // Akses private method melalui public method

?>
