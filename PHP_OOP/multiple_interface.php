<?php

// Interface Shape
interface Shape
{
    public function calculateArea();
}

// Interface Color
interface Color
{
    public function getColor();
}

// Class Circle implements Shape, Color
class Circle implements Shape, Color
{
    private $radius;
    private $color;
    
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
    
    public function getColor()
    {
        return $this->color;
    }
}

// Membuat object Circle
$circle = new Circle(5, "Blue");

// Menampilkan hasil
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Color of Circle: " . $circle->getColor() . "<br>";

?>
