<?php
/* --------- PHP Data Types --------- */
/*
- 1. String - A string is a series of characters surrounded by quotes
- 2. Integer - Whole numbers
- 3. Float - Decimal numbers
- 4. Boolean - true or false
- 5. Array - An array is a special variable, which can hold more than one value
- 6. Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

# We can use gettype() to know datatype

// 1. String
    $message = 'hello, world';
    $message2 = "hello, world";

// 2. Integer
    $age = 26;

// 3. Float
    $price = 999.99;
    $pi = 3.14;

// 4. Boolean
    $is_login = true;
    $is_admin = false;

/* 5. Arrays
1. Numeric Indices
2. Associative Keys
*/
$color = array("red", "green", "blue");
$person = array(
    "key" => "value",
    "name" => "Maung Maung",
    "age" => "20"
);
// echo $person['name'];
// echo $person['age'];

// 6. Objects
// Objects have both properties and methods
class Person {
    public $name;
    public $age;
}
$person1 = new Person(); //Object
$person1->name = "Maung Maung";
$person1->age = 20;
?>