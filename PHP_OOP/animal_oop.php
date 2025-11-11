<?php

// Parent Class - Animal
class Animal
{
    protected $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }
    
    public function sleep()
    {
        echo $this->name . " is sleeping.<br>";
    }
}

// Child Class - Cat
class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " says meow.<br>";
    }
}

// Child Class - Dog
class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " says woof!<br>";
    }
}

// Membuat object dari class Cat dan Dog
$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

// Memanggil method dari parent class Animal
$cat->eat();
$dog->sleep();

// Memanggil method spesifik dari masing-masing class
$cat->meow();
$dog->bark();

?>
