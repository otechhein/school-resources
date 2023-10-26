<?php

// autoloader.php
function my_autoloader($class) {
    $file = str_replace('\\', '/', strtolower($class)) . '.php';
    if (file_exists($file)) {
        include $file;
    }
}
spl_autoload_register('my_autoloader');
