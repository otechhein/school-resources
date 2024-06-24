<?php

include_once 'autoload.php';

use OOP\ClassAutoload\Calculator;
use OOP\ClassAutoload\Math;

$cal = new Calculator;
$math = new Math;


echo $math->something();
echo $cal->add([1,2,3]);