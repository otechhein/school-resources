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

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        echo "$this->name is running ...";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo "$this->name : Woof ... Woof";
    }
}

$bobby = new Dog("Aung Nat");
$bobby->run();
$bobby->bark();


// Constructor ကို အမြဲတမ်း public နဲ့ သုံးရမယ်။

// Static Method and Properties
// Object တည်ဆောက်စရာမလိုပဲ Class အမည်ကနေ တိုက်ရိုက် အသုံးပြုလို့ရတဲ့ Property တွေ Method တွေ ပါ။

class Animal2
{
    static $type = "Mammal";

    static function info()
    {
        echo "Group:" . static::$type;
    }
}
echo Animal2::$type;
Animal2::info();

// Inheritance (အမွေဆက်ခံခြင်း)
/**
 * DRY - Don't Repeat Yourself
 */

echo "<br> <h1> Inheritance Section </h1>";

class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is $this->name and the color is $this->color. <br>";
    }
}

//  class Strawberry extends Fruit {
//     public function message(){
//         echo "Am I a fruit or a berry?<br>";
//     }
//  }

class Apple extends Fruit
{
    public function message()
    {
        echo "I am apple or a fruit. <br>";
    }
}

//  $strawberry = new Strawberry("Strawberry", "red");
//  $strawberry->message();
//  $strawberry->intro();

// $apple = new Apple("Apple", "Green");
// $apple->message();
// $apple->intro();


// Overriding Inherited Methods

class Strawberry extends Fruit
{
    public $weight;
    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro()
    {
        echo "This fruit is $this->name, the color is $this->color, and the weight is $this->weight gram.";
    }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();

// The final keyword

final class Book
{
    // 
}

// With Error
class RomanceBook extends Book
{
    // 
}

// How to prevent method overriding

class SmartPhone
{
    final public function call()
    {
        // 
    }
}

class Iphone extends SmartPhone
{
    public function call()
    {
        // 
    }
}

// PHP does not allow Multiple Inheritance

// class Dog extends Animal, Mammal, Domestic {
//     // 
// }

// အဆင့်ဆင့် ဆက်ခံထားခြင်း
class Animal
{
    static function info()
    {
        echo "Animal Class";
    }
}

class Dog extends Animal
{
    // 
}

class Fox extends Dog
{
    // 
}

Fox::info();

/** 
 * ပင်မ Class ရဲ့ လုပ်ဆောင်ချက်ကို ခေါ်သုံးခြင်း
 * parent::__construct();
 * */

// self keyword usage

/**
 * Abstract Class
 * ဆက်ခံသူက မဖြစ်မနေ ရေးပေးရမယ့် သတ်မှတ်ချက်တွေကို ထည့်သက်မှတ်နိုင်ပါတယ်။
 */

abstract class Animal
{
    public abstract function talk();
    public function run()
    {
        echo "Running...";
    }
}

class Dog extends Animal
{
    // 
}

/**
 * Interface
 */

class Dog
{
    public function run()
    {
        echo "This dog is running";
    }
}



class Fish
{
    public function swim()
    {
        echo "This fish is swimming";
    }
}

function app(Dog $obj){
    $obj->run();
}

// app(new Dog);
// app(new Fish);

interface Animal{
    public function move();
}

class Dog implements Animal {
    public function move(){
        echo "The dog is running";
    }
}

class Fish implements Animal{
    public function move(){
        echo "The fish is swimming";
    }
}

function app(Animal $obj){
    $obj -> move();
}

// app(new Dog);
// app(new Fish);


