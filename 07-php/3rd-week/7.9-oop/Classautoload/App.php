<?php

include('./Calculator.php');
use OOP\Classautoload\Calculator;

$cal = new Calculator;

echo $cal->add([1,2,3]);