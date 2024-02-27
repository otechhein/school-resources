<?php

/**
 * Polymorphism is a concept in OOP that allows objects of different classes to be treated as objects of a common base class. This means you can use a single interface (like a method or property) to represent different types of objects.
 * treat different objects like they're all the same kind.
 * There are two ways.
 * 
 * 1. Overriding
 * 2. Interfaces
 */

 class Animal {
    public function printInfo() {
        echo "This is an animal.";
    }
}

class Dog extends Animal {
    public function printInfo() {
        echo "This is a dog." . "<br>";
    }
}

class Cat extends Animal {
    public function printInfo() {
        echo "This is a cat.";
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->printInfo();
$cat->printInfo();


interface Shape {
    public function calculateArea();  // Abstract
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

$circle = new Circle(5);
$square = new Square(4);

echo $circle->calculateArea();
echo $square->calculateArea();

