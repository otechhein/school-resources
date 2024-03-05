<?php 
$servername = "localhost";
$username = "root";
$password="";
$dbname ="staffdb";
try{
    $conn = new mysqli($servername, $username, $password, $dbname);
}catch(Exception $e){
    echo "Database Connection Error:" .$e->getMessage();
    exit();
}





?>