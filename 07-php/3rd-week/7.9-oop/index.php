<?php

// "PHP is not an object-oriented programming language, but it still has the capability to perform most of the tasks that an OOP language can do."

/**
 * Why should we need to learn OOP
 * 1. Industry Standard
 * 2. Code Organization
 * 3. Reusability
 * 4. Collaboration
 * 5. Library and Framework Understanding
 */

 /**
  * There are some key concepts and components
  */
  /**
   * Classes
   * Objects
   * Properties (Attributes)
   * Access Modifiers
   * Method
   * Static
   * Namespace
   * Interface
   * Inheritance
   * Trait
   * Abstract
   * Polymorphism
   * Exception
   * Design Patterns
   */

// Creating a Class
//    class Animal {
//     // 
//    }

// New Object Create
//    $dog = new Animal();

class Car {
    public $model;
    // The __construct method is a special method called a constructor
    public function __construct($model){
        $this->model = $model;
    }

    public function startEngine(){
        return "Engine started for {$this->model}.";
    }
}
$car = new Car("Toyata");
echo $car->model;
echo $car->startEngine();

/*
Access Modifier
1. public
2. private
3. protected
*/

class Animal {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run(){
        echo "$this->name is running ...";
    }
}

class Dog extends Animal{
    public function bark(){
        echo "$this->name : Woof ... Woof";
    }
}

$bobby = new Dog("Bobby");
$bobby -> run();
$bobby -> bark();
echo "Test";


// Constructor ကို အမြဲတမ်း public နဲ့ သုံးရမယ်။

// Static Method and Properties
// Object တည်ဆောက်စရာမလိုပဲ Class အမည်ကနေ တိုက်ရိုက် အသုံးပြုလို့ရတဲ့ Property တွေ Method တွေ ပါ။

class Animal2 {
    static $type = "Mammal";

    static function info(){
        echo "Group:" . static::$type;
    }
}
echo Animal2::$type;
Animal2::info();





