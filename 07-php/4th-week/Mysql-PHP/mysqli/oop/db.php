<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

try{
  $conn = new mysqli($servername, $username, $password, $dbname);
  echo "Connection Successful";
}catch(Exception $e){
  echo "Database Connection Error:" . $e->getMessage();
  exit();
}