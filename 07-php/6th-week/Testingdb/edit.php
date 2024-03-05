<?php
// echo $_GET["id"];
require_once "./db/db.php";
$query = "SELECT * FROM staffs WHERE id = ?";
$querylist = $conn->prepare($query);

$id = $_GET["id"];
$querylist->bind_param('i',$id);
// $querylist->bind_param('i',$_GET["id"]);
$querylist->execute();
$result =  $querylist->get_result();
foreach($result as $value){
    echo "<form action='updateprocess.php' method='post'>
    <input type='hidden' name='id' value='".$value['id']."'>
    <label>Staff Name :<label>
    <input type='text'name='name' value='".$value["name"]."'><br>
    <label>Staff Email :<label>
    <input type='text'name='email' value='".$value["email"]."'><br>
    <label>Staff Age :<label>
    <input type='number'name='age' value='".$value["age"]."'><br>
    <label>Staff Password :<label>
    <input type='text'name='password' value='".$value["password"]."'><br>
    <button type='submit' >Update</button></form>
    ";
    
}
$result->close();
$conn->close();
// echo $querylist;






?>
