<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL' . mysqli_connect_errno();
    exit();
}