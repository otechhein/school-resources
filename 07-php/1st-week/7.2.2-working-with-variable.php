<?php
/* ----------- 1. Variable existence functions -------------- */
// 1. isset()
// 2. empty()
// 3. unset()

// isset
if(isset($_POST['username'])){
    $user_name = $_POST['username'];
    // Continue
}

// empty
if(!empty($_POST['submit'])){
    //Form submitted, process data
}

// unset

$originalVar = "I am here";
echo "Original variable: $originalVar <br>";

unset($originalVar);

echo "After unset: $originalVar";

/* ----------- Variable type and property functions -------------- */
/**
 * 1. is_string()
 * 2. is_int()
 * 3. is_float()
 * 4. is_numeric()
 * 5. is_bool()
 * 6. is_array()
 * 7. var_dump()
 */

// is_string
$var = "Hello, World";
if (is_string($var)){
    echo "The variable is a string.";
} else {
    echo "The variable is not a string";
}

// is_int
$var1 = "This is a string";
if(is_int($var1)){
    echo "The variable is an integer";
}else{
    echo "The variable is not an interger";
}

// is_float
$pi = 3.14;
if(is_float($pi)){
    echo "The variable is a float";
}else{
    echo "The variable is not a float";
}

// is_numeric (Finds whether a variable is a number or a numeric string)
$var2 = "35";
if(is_numeric($var2)){
    echo "The variable is numeric";
}else{
    echo "The variable is not numeric";
}

// is_bool (Finds out whether a variable is a boolean)
$var3 = true;
if(is_bool($var3)){
    echo "The varible is boolean.";
}else{
    echo "The variable is not boolean";
}

// is_array (Finds whether a variable is an array)
$var4 = [1, 2, 3];
if(is_array($var4)){
    echo "The variable is a array";
}else{
    echo "The variable is not a array";
}

// var_dump (Show detailed information about a variable, including its type and value)
$var5 = 42;
$var6 = [1, 2, 3];
var_dump($var5, $var6);

