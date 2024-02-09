<?php
include '../config/database.php';

if (!empty($_POST)){
    // date_default_timezone_set("Asia/Yangon");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];
    // $date = date("Y-m-d H:i:s");

    $sql = "UPDATE feedbacks SET name = ?, email = ?, body = ?, date = NOW() WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $name, $email, $body, $id);
    if($stmt->execute()){
        header("Location: ../feedback.php");
        exit;
    }else{
        echo "Failed Updating";
    }
}



