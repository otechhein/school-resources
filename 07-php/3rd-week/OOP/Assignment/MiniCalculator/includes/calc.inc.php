<?php

declare(strict_types = 1);
include('class-autoload.inc.php');

$operation = $_POST['operation'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

// var_dump($operation, $num1, $num2);die;

$calc = new Calc($operation, (int)$num1, (int)$num2);

// var_dump($calc);die;

try{
    echo "Result" . "<br>";
    echo $calc->calculator();
}catch(TypeError $e){
    echo "Error!: " . $e->getMessage();
}