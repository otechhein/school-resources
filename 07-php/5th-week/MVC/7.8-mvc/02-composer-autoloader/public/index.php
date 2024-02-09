<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Database configuration
require_once __DIR__ . '/../config/database.php';


// Create PDO object for database connection
try{
    $pdo = new PDO("mysql:host=".DB_HOST.":".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS);
} catch(PDOException $e){
    $error = $e->getMessage();
    echo $error;
}


$path = $_SERVER['REQUEST_URI'];
// var_dump($path);die;
// $path = "/";
$url = $path == "/" ? 'user/index' : ltrim($path, '/');

// echo '<pre>';
// var_dump($url);
// echo '</pre>';
// exit;

list($controllerName, $action) = explode('/', $url);

// var_dump($controllerName);die;
// var_dump($action);die;

$controllerName = "App\\Controllers\\".ucfirst($controllerName).'Controller';

try {
    // // Pass the $pdo object to the controller
    $controller = new $controllerName($pdo);

    // // Call the index method
    $controller->{$action}();
} catch(Error $e) {
    echo $e;
}
