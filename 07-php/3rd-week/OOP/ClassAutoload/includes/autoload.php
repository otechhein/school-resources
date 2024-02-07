<?php

// spl_autoload_register(function ($class) {
//     // var_dump($class);
//     // exit;
//     $class = str_replace("\\", "/", $class);
//     // var_dump($class);
//     // exit;
//     include($class . ".php");
// });

spl_autoload_register(function($class) {
    // var_dump($class);exit(1);
    // Convert namespace separators to directory separators
    $classFilePath = str_replace('\\', '/' , $class) . '.php';

    // var_dump($classFilePath);exit(1);

    // Full path to the file
    // $fullPath = __DIR__ . DIRECTORY_SEPARATOR  . $classFilePath;

    // var_dump($fullPath);exit(1);

    // Check if the file exists before including it
    if (file_exists($classFilePath)) {
        include_once $classFilePath;
    }else{
        echo "NG";
        exit(1);
    }
});
