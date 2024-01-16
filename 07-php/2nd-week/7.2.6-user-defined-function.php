<?php
declare(strict_types = 1);
/**
 * What is function?
 * In programming, a function is a reusable block of code that performs a specific task or set of tasks. It's like a mini-program within a larger program. Functions are designed to take inputs (parameters), process them, and then return a result.
 */

// PHP has more than 1,000 built-in functions

/**
 * User-defined Function
 * 1. Function declaration starts with the keyword "function"
 * 2. Follow by the name of the funtion and a pair of parentheses for parameters and a pair of curly braces
 * 3. Function names are not case-sensitive
 * 4. To call the function, write its name followed by parentheses ()
 * 5. Information can be passed to functions through arguments. An argument is just like a variable.
 */

 function Add($a, $b){
    $name = 'maung maung'; // Local variable
    echo $a + $b;
 }

 add(5, 5); // Case-Insensitive

/**
 * Using variable in function
 * 1. Local Variable
 *  - Declare within the function
 *  - Only access within function
 *  - Can not be visible outside of the function
 *  - Temporary and use for storing data
 *  - Variable can be reuse in different function or block without issue
 * 2. Global Variable
 *  - Declare at the top level of a program
 *  - Can be access from anywhere
 *  - Use "global" keyword when using within function
 */
 
// Global
 $name = "";
 function formatName($first, $last){
    global $name;
    $name = $first . ' ' . $last;
 }

 formatName("Hein", "Htet");
 echo "Name: $name" . "<br>";

/**
 * Returning values from a function
 * 1. Return value is the data that a function send back to the calling it
 * 2. This returned value can be any datatype
 * 3. To let a function retrun a value, use the "return" statement
 */

 function sum($x, $y){ 
    return $x + $y;
 }
$x = 5; $y = 7;
echo "SUM:" . sum($x, $y) . "<br>";
 
 /**
  * Passing argument by reference and Value
  * 1. Arguments are usually passed by value
  * 2. The variable that was passed into the function can not be changed
  * 3. When you pass a variable by reference, changes made to the variable inside the function affect the original variable outside the function.
  * 4. To pass a variable by reference, you use the & symbol before the parameter in the function definition.
  */

function add_five(&$value) {
    $value += 5;
}
$num = 2;
add_five($num);
echo "Addng Five: " . $num . "<br>"; // 7

/**
 * Variable number of arguments
 * 1. In programming, a function usually takes a fixed number of arguments (inputs).
 * 2. However, sometimes you might want a function to be flexible and accept any number of arguments.
 * 3. When you see a function parameter with ... in front of it, it means the function can take any number of arguments.
 * 4. This is also known as a "variadic" function.
 * 5. The variadic function treats the passed arguments as an array. Inside the function, you can work with this array to access each argument.
 */

// int num = 10;

// A variadic function that takes any number of arguments
function addNumbers(...$numbers) {
    $sum = 0;
    // var_dump($numbers);
    // $numbers is now an array containing all the arguments
    foreach ($numbers as $number) {
        $sum += $number;
    }

    // for($i = 0; $i < count($numbers); $i++){
    //     $sum += $numbers[$i];
    // }
    
    return $sum;
}

// echo addNumbers(1,2,3,4) . "<br>";

// Using the variadic function with different numbers of arguments
$result1 = addNumbers(1, 2, 3);
// $result2 = addNumbers(5, 10, 15, 20);

echo "Result 1: $result1<br>"; // Output: Result 1: 6
// echo "Result 2: $result2<br>"; // Output: Result 2: 50

/**
 * Loosely datatype Vs Strictly
 * 1. Variables are not explicitly declared with a data type
 * 2. The type of a variable is determined at runtime based on the value assigned to it.
 * 3. In PHP 7, type declarations were added.
 * 4. By adding "strict" declaration, it will throw a "Fatal error" if datatype mismatch
 */


//  function sumNum(int $a, int $b){
//     return $a + $b;
//  }

//  echo sumNum(5, "5 days");

/**
 * Return type declaration
 * PHP 7 also support type declaration for the return statement
 * To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
 */

// declare(strict_types=1);
function addNumbers_float(int $a, float $b) : float {
  return $a + $b;
}
echo addNumbers_float(5, 5.2);


