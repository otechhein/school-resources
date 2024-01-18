<?php

// header(header, replace, http_response_code)

$userLoggedIn = false;

if($userLoggedIn){
    echo "Welcome from Homepage.";
    exit(); 
    // die();
}else{
    header("Location: ./login.php");
    // header("Location: https://o-technique-myanmar.com");
    // header("Refresh: 3; url = login.php");
    exit();
    // die();
}

echo "Hello World";