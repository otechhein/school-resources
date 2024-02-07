<?php

// Static Method and Properties
// Object တည်ဆောက်စရာမလိုပဲ Class အမည်ကနေ တိုက်ရိုက် အသုံးပြုလို့ရတဲ့ Property တွေ Method တွေ ပါ။

class Animal
{
    static $type = "Mammal";

    static function info($type2)
    {
        echo $type2;
        echo "Group:" . self::$type;
    }
}

echo Animal::$type . "<br>";
Animal::info("Blah Blah");

// self keyword usage