<?php

// Abstract Class Shape
abstract class Shape
{
    abstract public function calculateArea();
}

// Class Circle extends Shape
class Circle extends Shape
{
    private $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Class Rectangle extends Shape
class Rectangle extends Shape
{
    private $width;
    private $height;
    
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Membuat object
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Menampilkan hasil perhitungan area
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";

?>
