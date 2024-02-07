<?php
require_once('./db.php');

$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);
$id = 1;
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
$conn = null;
