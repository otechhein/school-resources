<?php

/**
 * Interface
 * Only Abstract Methods and Constant variable
 */

// class Dog
// {
//     public function run()
//     {
//         echo "This dog is running";
//     }
// }

// class Fish
// {
//     public function swim()
//     {
//         echo "This fish is swimming";
//     }
// }

// function app(Dog $obj){
//     $obj->run();
// }

// app(new Dog);
// app(new Fish);

// interface Animal{
//     public function move(); // ကြေညာချက်သီးသန့်
// }

// class Dog implements Animal {
//     public function move(){
//         echo "The dog is running" . "<br>";
//     }
// }

// class Fish implements Animal{
//     public function move(){
//         echo "The fish is swimming";
//     }
// }

// function app(Animal $obj){
//     $obj -> move();
// }

// app(new Dog);
// app(new Fish);

// A class can implement multiple interfaces

interface Animal {
    public function move();

    public function eat();
}

interface Livestock {
    public function isFriendly();
}

class Cow implements Animal, Livestock {
    public function move(){
        echo "The cow is walking";
    }

    public function isFriendly(){
        return true;
    }

    public function eat(){
        echo "Eating";
    }
}

