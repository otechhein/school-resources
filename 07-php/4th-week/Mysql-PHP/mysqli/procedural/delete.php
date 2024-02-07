<?php

require_once "db.php";

$query = "DELETE FROM `users` WHERE id = ?";

$statement = mysqli_prepare($conn, $query);

$id = 29;

mysqli_stmt_bind_param($statement, 'i', $id);

mysqli_stmt_execute($statement);

echo "Deleted Successfully";

mysqli_stmt_close($statement);