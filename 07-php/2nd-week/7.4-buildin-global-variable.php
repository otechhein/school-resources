<?php
/*
    1. $GLOBALS[]
    2. $_SERVER[]
    3. $_REQUEST[]
    4. $_POST[]
    5. $_GET[]
    6. $_FILES[]
    7. $_ENV[]
    8. $_COOKIE[]
    9. $_SESSION[]
 */

// 1. $GLOBALS
// An associative array containing references to all variables which are currently defined in the global scope of the script. The variable names are the keys of the array.

$firstname = "John";

function printName(){
    global $firstname;
    echo $firstname . "Doe";
}

printName();


// 2. $_SERVER Super Global Array
echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['REQUEST_METHOD'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>"; // In IPv6, "::1" is the loopback address, equivalent to the IPv4 loopback address 127.0.0.1.
echo $_SERVER['HTTP_HOST'] . "<br><br>";

// စမ်းကြည့်ရန်
echo "<a href='https://www.w3schools.com/php/php_superglobals_server.asp' target='_blank'>SERVER Global Detail</a>";

// 3. $_GET 
// 4. $_POST
// 5. $_REQUEST

// Cookie နဲ့ Session နဲ့ အသေးစိပ်ကို 7.8 ရောက်ရင် Detail ပြောပါမယ်။
// 6. $_COOKIE
/**
 * This superglobal array contains data sent from the client's browser as cookies. You can use it to access and modify cookie values. Cookies can be set with setcookie() and retrieved with $_COOKIE['cookie_name']. 
 * A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
 */
// 7. $_SESSION
/**
 * This superglobal array is used for working with PHP sessions. It allows you to store and retrieve session-specific data across multiple requests. Start a session with session_start() and then access session data using $_SESSION['key'].
 * Unlike a cookie, the information is not stored on the users computer.
 */
// Form အခန်းရောက်ရင် Detail ရှင်းပြပါမယ်။
// 8. $_FILES
/**
 * HTTP File Upload variables
 * An associative array of items uploaded to the current script via the HTTP POST method
 */
// 9. $_ENV
putenv("GREETING=HelloWorld");
echo $_ENV['GREETING'];
// you may need additional configuration to make the environment variable persistent across multiple requests. If you're still facing issues, check your server configuration and ensure that it allows setting and reading environment variables in the way you intend.



