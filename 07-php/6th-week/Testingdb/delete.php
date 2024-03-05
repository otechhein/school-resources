<?php
// echo $_GET['id'];
require_once "./db/db.php"; 
$query ="DELETE FROM `staffs` WHERE id = ?";
$delete = $conn->prepare($query);
$delete->bind_param('i',$_GET['id']);
$delete->execute();
$delete->close();
$conn->close();
header("Location: stafflist.php?message=Successfully Delete Data from DB!");

?>