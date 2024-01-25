<?php

include('Math.php');


// echo PI;
// echo add(1, 2);

// include Statement နဲ့ Code File တစ်ခုကို ချိတ်ဆက်ရယူ လိုက်တဲ့ အခါ ရေးထားသမျှ Code အကုန်ကို ထည့်ပြီး Run သွားမှာပါ။

// include('Math.php')
// include 'Math.php';

// You can prevent duplicate running same code file
// require_once
// include_once


// include('./Calculator.php'); // With Error
// Fatal error: Cannot redeclare add()

// Using Namespace

// include('Math.php');
include('Calculator.php');

// echo Math\add(1, 2);
// echo Calculator\add([2, 3, 4]);

// echo Math\Basic\add(1, 2);


/* Namespace Import */

use Library\Helper\Math\Basic\Calculator;
$cal = new Calculator;
echo "Calculator" . "<br>";
echo $cal->add([1, 2, 5]);

// Alias
use Library\Helper\Math\Basic\Calculator as Cal;
$cal = new Cal;


