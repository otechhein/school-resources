<?php

/*
Access Modifier
1. public
2. private
3. protected
*/

class Car {
    public $model;
    public $color;
    // The __construct method is a special method called a constructor
    public function __construct($model, $color){
        echo "Object Created" . "<br>";
        $this->model = $model;
        $this->color = $color;
    }

    public function startEngine(){
        return "Engine started for {$this->model}.";
    }
}
$car = new Car("Toyata", "Red"); 
$car->model;
echo $car->startEngine();