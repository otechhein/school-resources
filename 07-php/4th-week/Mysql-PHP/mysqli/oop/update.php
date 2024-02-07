<?php

require_once "db.php";

// $id = 1;

$query = "UPDATE `users` SET `company_name`='Otechnique',`contact_name`='Toe Tat',`address`='Yangon',`city`='Yangon',`postal_code`='11022',`country`='Myanmar' WHERE id = ?";

$stmt = $conn->prepare($query);

$id = 2;

$stmt->bind_param('i', $id);

$stmt->execute();

echo "Updated Successfully";

$stmt->close();
$conn->close();

