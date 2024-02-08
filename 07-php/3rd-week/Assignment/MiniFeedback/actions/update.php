<?php
include '../config/database.php';

if (!empty($_POST)){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];

    $sql = "UPDATE feedbacks SET name = ?, email = ?, body = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $name, $email, $body, $id);
    if($stmt->execute()){
        header("Location: ../feedback.php");
        exit;
    }else{
        echo "Failed Updating";
    }
}



