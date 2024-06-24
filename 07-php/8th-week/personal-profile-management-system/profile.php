<?php
// echo "Default session.cookie_lifetime: " . ini_get('session.cookie_lifetime');
// exit;
session_start();
include "./_layouts/header.php";
include "./_config/db.php";

if(!$_SESSION['loggedin']){
    header("Location: login.php");
    exit;
}

$name_error = $_SESSION['name_error'] ?? null;
$phone_error = $_SESSION['phone_error'] ?? null;
$address_error = $_SESSION['address_error'] ?? null;
$email_error = $_SESSION['email_error'] ?? null;
$password_error = $_SESSION['password_error'] ?? null;
$confirm_password_error = $_SESSION['confirm_password_error'] ?? null;

if(isset($_SESSION['name_error'])){
    unset($_SESSION['name_error']);
}

if(isset($_SESSION['phone_error'])){
    unset($_SESSION['phone_error']);
}
if(isset($_SESSION['address_error'])){
    unset($_SESSION['address_error']);
}
if(isset($_SESSION['email_error'])){
    unset($_SESSION['email_error']);
}
if(isset($_SESSION['password_error'])){
    unset($_SESSION['password_error']);
}
if(isset($_SESSION['confirm_password_error'])){
    unset($_SESSION['confirm_password_error']);
}

?>
<section>
    <div class="container">
        <header class="flex align-center space-between">
            <a href="./index.php">Back</a>
            <h3>Personal Profile Management System</h3>
            <a href="./_actions/logout.php">Logout</a>
        </header>
        <form action="./_actions/update.php" method="post" enctype="multipart/form-data">
            <div class="wrapper flex">
                <div class="box">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" id="name" class="form-control" maxlength="100">
                        <small class="text-danger"><?=$name_error?></small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" maxlength="100" required>
                        <small class="text-danger"><?=$phone_error?></small>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="30" rows="10"></textarea>
                        <small class="text-danger"><?=$address_error?></small>
                    </div>
                </div>
                <div class="box">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" maxlength="100" required>
                        <small class="text-danger"><?=$email_error?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" >
                        <small class="text-danger"><?=$password_error?></small>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password" class="form-control">
                        <smal class="text-danger"><?=$confirm_password_error?></small>
                    </div>
                </div>
                <div class="form-group flex">
                    <button type="submit" class="btn btn-danger">Delete Account</button>
                    <button type="submit" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>