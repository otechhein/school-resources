<?php

// Create Connection

$conn = mysqli_connect('localhost', 'root', '', 'php_blog');

// Check Connection
if(mysqli_connect_errno()){
    // Connection Failed
    echo 'Failed to connect to MySQL' . mysqli_connect_errno();
}else{
    echo "OK";
}