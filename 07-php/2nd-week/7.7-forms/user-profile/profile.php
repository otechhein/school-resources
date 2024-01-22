<?php

session_start();

if(!isset($_SESSION['user'])){
    header("location: index.php");
    // echo "You are not logined. After 3 seconds, you will get back login page.";
    // header("Refresh: 3; url = index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-3"><?php !empty($_GET['username'])?$_GET['username'] : ''; ?></h1>
        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Can not upload file
            </div>
        <?php endif; ?>

        <?php if(file_exists('./photos/profile.jpg')) : ?>
            <img src="./photos/profile.jpg" alt="Profile Photo"  class="rounded-circle mb-3" width="200" height="200">
        <?php endif; ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="file" name="photo" id="photo" class="form-control">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>

        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b>
            </li>
            <li class="list-group-item">
                <b>Phone:</b>
            </li>
            <li class="list-group-item">
                <b>Address:</b> Tamwe t
            </li>
        </ul>
        <br>
        <a href="_actions/logout.php">Logout</a>
    </div>
</body>
</html>