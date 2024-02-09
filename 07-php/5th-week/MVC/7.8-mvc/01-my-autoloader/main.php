<?php

require_once 'autoloader.php';

$obj = new MyNamespace\MyClass();

echo $obj->hello();


$obj1 = new MyNamespace\Example();

echo $obj1->say("OKAY");