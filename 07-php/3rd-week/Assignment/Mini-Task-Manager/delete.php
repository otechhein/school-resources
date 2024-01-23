<?php

// print_r($_SESSION['tasks']);exit;
session_start();

if (!empty($_SESSION['tasks'])){
    unset($_SESSION['tasks']);
    session_destroy();
    header("Location: ./index.php");
    exit;
}else{
    echo "Session Not Found";
    header("Location: ./index.php");
    exit;
}