<?php
require_once "./db/db.php";
// echo $_post['name'];
$sql = "INSERT INTO staffs (name, email, age, password) VALUES (?,?,?,?)";
$prepare =  $conn->prepare($sql);
$staffname =  $_POST['name'];
$staffemail =  $_POST['email'];
$staffage =  $_POST['age'];
$staffpassword =  $_POST['password'];

$prepare->bind_param("ssis", $staffname, $staffemail, $staffage, $staffpassword);
$prepare->execute();
$prepare->close();
$conn->close();

?>