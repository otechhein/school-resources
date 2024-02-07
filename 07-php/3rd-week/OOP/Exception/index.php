<?php
// Exceptions are used to handle errors and unexpected situations in your code.
/**
 * 1. E_PARSE
 * 2. E_ERROR
 * 3. E_WARNING
 * 4. E_NOTICE
 * 5. E_STRICT
 * 6. E_DEPRECATED
 * 7. E_ALL
 */

// error_reporting(E_ALL)
// error_reporting(0)
// error_reporting(E_PARSE | E_ERROR | E_WARNING)
// error_reporting(E_ALL & ~E_NOTICE)

/**
 * Exception Handling ဟာ Error တက်တဲ့ အခါ Program ရပ်မသွားစေပဲ ဘာဆက်လုပ်ရမလဲဆိုတာ ကို သတ်မှတ်ပေးနိုင်ပါတယ်။
 */


 function add($nums){
    if(!is_array($nums)){
        throw new Exception("fjsfkskfsjfljljfslsjl");
    }
    return array_sum($nums);
 }

//  echo add(1);
//  exit;

try {
    echo add([1, 3]);
} catch(Exception $e){
    echo $e->getMessage();
} finally {
    echo "Done";
}

/*
When performing database operations, you might use try to execute a query, and if an exception occurs (e.g., a database connection error), you catch the exception to handle it gracefully.

File Operations:
When working with files, you might use try for file read or write operations, catching exceptions for file not found or permission issues.

External API Calls:
When making calls to external APIs, you might use try to handle potential network issues or unexpected responses.

Resource Cleanup:
In the finally block, you can place code for releasing resources like closing database connections or file handles, ensuring that cleanup operations always occur.
*/