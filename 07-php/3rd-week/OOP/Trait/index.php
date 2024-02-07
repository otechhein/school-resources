<?php

/**
 * Trait
 * PHP မှာ Multiple Inheritance မရတဲ့ အတွက်ကြောင့် Trait ကို သုံးလို့ရပါတယ်။
 */

//  class Math {
//     public function add($a, $b){
//         echo $a + $b;
//     }
//  }

//  class Area {
//     private $PI = 3.14;
//     public function circle($r){
//         echo $this->PI * $r * $r;
//     }
//  }

// //  Caculator wants to inheric both class but it can not effort
//  class Calculator extends Math {
//     // 
//  }

//  So, traits can be replace

 trait Math {
    public function add($a, $b){
        echo $a + $b . "<br>";
    }
 }

 trait Area {
    private $PI = 3.14;

    public function circle($r){
        echo $this->PI * $r * $r;
    }
 }

 class Calculator {
    use Math, Area;
 }

 $calc = new Calculator;
 $calc->add(1, 2);
 $calc->circle(5);