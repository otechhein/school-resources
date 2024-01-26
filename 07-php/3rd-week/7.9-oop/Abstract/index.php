<?php

/**
 * Abstract Class
 * ဆက်ခံသူက မဖြစ်မနေ ရေးပေးရမယ့် သတ်မှတ်ချက်တွေကို ထည့်သက်မှတ်နိုင်ပါတယ်။
 */

abstract class Person
{
    public $greeting;
    public function __construct($greeting)
    {
        $this->greeting = $greeting;
    }

    public abstract function talk();

    public function listen()
    {
        echo "Listening on $this->greeting.";
    }
}

// Error: abstract method must be declared or implement the remaining
class Boy extends Person
{
    // public function __construct($greeting)
    // {
    //     parent::__construct($greeting);
    // }

    public function talk(){
        echo $this->greeting;
    } 
}

$maungmaung = new Boy("Whatup!");
$maungmaung->talk();
// $maungmaung->listen();