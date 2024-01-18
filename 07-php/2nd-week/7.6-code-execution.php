<?php
/*
Code Execution in PHP

1. Web Server Execution:
   - What is it? When PHP code is embedded in a web page and a user accesses that page through a web browser, the web server executes the PHP code and sends the result (usually HTML) to the user's browser.
   - Example: When you visit a website with PHP, like `index.php`, the web server processes the PHP code in that file and sends the output to your browser.

2. Command Line Execution:
   - What is it? PHP scripts can also be run directly from the command line interface (CLI) without the need for a web server. This is useful for tasks that don't involve web requests, such as running scripts for automation or maintenance.
   - Example: Running a PHP script from the command line by typing `php script.php` in the terminal.

3. Dynamic Code Execution:
   - What is it? PHP allows for the dynamic execution of code within a script using functions like `eval()`. This can be powerful but needs to be used carefully to avoid security risks.
   - Example: Using `eval("$result = 5 + 3;");` to dynamically execute the addition operation and store the result in the variable `$result`.

4. Include and Require Execution:
   - What is it? PHP provides `include` and `require` statements to include the contents of other PHP files within a script. This allows code reuse and modularization.
   - Example: Including a file with common functions using `include 'common.php';` to use those functions in your current script.
 */

//  Dynamic Code Execution
/**
 * 1. eval()
 * 2. call_user_func()
 * 3. call_user_func_array()
 */
$string = "beautiful";
$time = "winter";

$str = "This is a $string $time morning!";
echo $str. "<br>";

// eval("echo \$str = \"$str\";");
// echo $str;
// exit();

$code = 'echo "Hello, World";';
eval($code);exit;

function myFunction($param){
   echo "Function called with parameter: $param";
}
$functionName = 'myFunction';
// call_user_func($functionName, 'Value');

function addNumbers($a, $b){
   return $a + $b;
}
$parameters = [5, 5];
$result = call_user_func_array('addNumbers', $parameters);
echo "Result: $result";