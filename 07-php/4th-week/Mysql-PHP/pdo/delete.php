<?php

require_once "./db.php";

$sql = "DELETE FROM users WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$id = 30;
$stmt->execute();

echo "Deleted";