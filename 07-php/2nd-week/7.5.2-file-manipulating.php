<?php

/**
 * 1. Reading to File
 *  - file_get_contents()
 *  - fgets()
 */

$students = file_get_contents('./student-list.txt');

// echo "<pre>";
// var_dump($students);
// echo $students;

// die();

// $file = fopen('./student-list.txt', 'r');
// while(!feof($file)){
//     $line = fgets($file);
//     echo $line . "<br>";
// }

// fclose($file);

// die();

/**
 * 2. Writing to File
 *  - file_put_contents()
 *  - fwrite()
 */

//file_put_contents()
//  Writes data to a file. It creates the file if it doesn't exist and overwrites the content if the file already exists. It returns the number of bytes written or false on failure.

// $username = "\n John Doe";
// file_put_contents('./student-list.txt', $username);
// file_put_contents('./student-list.txt', $username, FILE_APPEND);
// die();
// fwrite()
// Writes the contents of the string to the file. It returns the number of bytes written or false on failure.

// if(fopen('./student-list.txt', 'w')){
//     echo "OK";
// }else{
//     echo "Something Wrong";
// }
// die();
$path = './student-list.txt';
if (!file_exists($path)) {
    header("Location: home.php");
}else{
    $file_handle = fopen($path, 'w');
    if (fwrite($file_handle, "John Doe")) {
        echo "Successful";
    } else {
        echo "NG";
    }
    fclose($file_handle);
}


// File Exist
// file_exists(string $filename)