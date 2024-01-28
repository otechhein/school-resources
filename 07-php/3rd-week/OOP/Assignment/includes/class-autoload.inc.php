<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    // echo $_SERVER['HTTP_HOST'] . "<br>";
    // echo $_SERVER['REQUEST_URI'];
    // exit;
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if(strpos($url, 'includes') !== false){
        $path = '../classes/';
    }else{
        // echo "est";
        $path = 'classes/';
    }
    $extension = '.php';

    // echo $path . $className . $extension;exit;
    require_once $path . $className . $extension;
}

