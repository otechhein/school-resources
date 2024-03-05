<?php 
// echo $_POST['password'];
// $testing  = "mgmg";
// echo $testing /// mgmg
// // left   = right 
// // right side data add
// //left data receive.
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$password = $_POST['password'];
require_once "./db/db.php";
$query= "UPDATE `staffs` SET `name` = '$name', `email` = '$email',`age` = '$age' ,
 `password` = '$password' WHERE id = ?";
 $data = $conn->prepare($query);
$data->bind_param('i',$id);
$data->execute();
$data->close();
$conn->close();
header("Location: stafflist.php?message=Successfully update!");
?>