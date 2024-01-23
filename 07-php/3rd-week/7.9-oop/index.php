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
   * 1. Classes
   * 2. Objects
   * 3. Properties (Attributes)
   * 4. Access Modifiers
   * 5. Method
   * 6. Static
   * 7. Namespace
   * 8. Interface
   * 9. Inheritance
   * 10. Trait
   * 11. Abstract
   * 12. Polymorphism
   * 13. Exception
   * 14. Design Patterns
   */

// Creating a Class
//    class Animal {
//     // 
//    }

   /**
    * 1. Properties (Variable)
    * 2. Methods (Function)
    */


// New Object Create
//    $dog = new Animal();

// class Car {
//     // public $model;
//     // The __construct method is a special method called a constructor
//     public function __construct(public $model, public $color){
//         // echo "Object Created" . "<br>";
//         // $this->model = $model;
//     }

//     public function startEngine(){
//         return "Engine started for {$this->model}.";
//     }
// }
// $car = new Car("Toyata", "Red"); // Object
// $car2 = new Car("BMW", "Blue"); //
// echo $car2->model . "<br>";
// echo $car2->color . "<br>";
// echo $car2->startEngine();

// exit;

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

$bobby = new Dog("Aung Nat");
$bobby -> run();
$bobby -> bark();
exit;


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





