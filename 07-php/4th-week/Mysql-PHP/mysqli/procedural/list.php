<?php

require_once "db.php";

$query = "SELECT * FROM users";
$results = mysqli_query($conn, $query);
$users = mysqli_fetch_all($results, MYSQLI_ASSOC);

// echo '<pre>';
// var_dump($users);
// echo '</pre>';
// exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <div class="user-list">
        <ul>
            <?php 
                if(isset($users)) : 
                foreach($users as $user) :
            ?>
            <li>
                <?= $user['company_name'] ?>
            </li>
            <li>
                <?= $user['contact_name'] ?>
            </li>
            <li>
                <?= $user['address'] ?>
            </li>
            <li>
                <?= $user['city'] ?>
            </li>
            <?php endforeach; endif;?>
        </ul>
    </div>
</body>
</html>