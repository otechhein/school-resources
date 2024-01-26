<?php

// Inheritance (အမွေဆက်ခံခြင်း)
/**
 * DRY - Don't Repeat Yourself
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
 
//  class Dog {
//     protected $name;

//     public function __construct($name)
//      {
//          $this->name = $name;
//      }

//     public function run()
//      {
//          echo "$this->name is running ...";
//      }
//  }
 
 class Dog extends Animal
 {
     public function bark()
     {
         echo "$this->name : Woof ... Woof";
     }
 }
 
 $aungnat = new Dog("Aung Nat");
 $aungnat->run();
 $aungnat->bark();

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
 
//  class Dog extends Animal, Mammal, Domestic {
//      // 
//  }
 
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