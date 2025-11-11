<?php

// Interface Shape
interface Shape
{
    public function calculateArea();
}

// Class Circle implements Shape
class Circle implements Shape
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

// Class Rectangle implements Shape
class Rectangle implements Shape
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

// Function untuk print area (Polymorphism)
function printArea(Shape $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>";
}

// Membuat object
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Memanggil function dengan polymorphism
printArea($circle);
printArea($rectangle);

?>
