<?php

require_once "db.php";

// $id = 1;

$query = "UPDATE `users` SET `company_name`='OTechnique',`contact_name`='Toe Tat',`address`='Yangon',`city`='Yangon',`postal_code`='11022',`country`='Myanmar' WHERE id = ?";

$statement = mysqli_prepare($conn, $query);

$id = 2;

mysqli_stmt_bind_param($statement, 'i', $id);

mysqli_stmt_execute($statement);

// echo $status ? "Updated Successfully" : "";
mysqli_stmt_close($statement);

