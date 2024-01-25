<?php

// Creating a Class
class Animal
{
    // 
}

/**
 * 1. Properties (Variable)
 * 2. Methods (Function)
 */

// Creating a New Object
// $dog = new Animal();

class Car
{
    public $model = "BMW";
    public function startEngine()
    {
        return "Engine started for {$this->model}.";
    }
}

$toyota = new Car("Toyata", "Red");
echo $toyota->model;
echo $toyota->startEngine();
