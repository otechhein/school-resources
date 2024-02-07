<?php

require_once "db.php";

$query = "DELETE FROM `users` WHERE id = ?";

$stmt = $conn->prepare($query);

$id = 2;

$stmt->bind_param('i', $id);

$stmt->execute();

echo "Deleted Successfully";

$stmt->close();
$conn->close();