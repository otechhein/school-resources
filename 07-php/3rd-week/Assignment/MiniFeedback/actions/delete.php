<?php

include '../config/database.php';

if (isset($_GET['id'])){
    $sql = "DELETE FROM feedbacks WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param('i', $_GET['id']);
    $stmt->execute();

    header("Location: ../feedback.php");
    exit;
}