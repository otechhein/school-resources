<?php

require_once "db.php";

$query = "SELECT * FROM users";
$res = $conn->query($query);
$users = $res->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach($users as $user) : ?>
    <ul>
      <li><?= $user['company_name'] ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>