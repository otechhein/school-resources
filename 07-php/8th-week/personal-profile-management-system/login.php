<?php

include "./_layouts/header.php";
session_start();

$email_error = $_SESSION['email_error'] ?? null;
$email2_error = $_SESSION['email2_error'] ?? null;
$password_error = $_SESSION['password_error'] ?? null;
$password2_error = $_SESSION['password2_error'] ?? null;
$confirm_password_error = $_SESSION['confirm_password_error']??null;

if(isset($_SESSION['email_error'])){
    unset($_SESSION['email_error']);
}
if(isset($_SESSION['email2_error'])){
    unset($_SESSION['email2_error']);
}
if(isset($_SESSION['password_error'])){
    unset($_SESSION['password_error']);
}
if(isset($_SESSION['password2_error'])){
    unset($_SESSION['password2_error']);
}
if(isset($_SESSION['confirm_password_error'])){
    unset($_SESSION['confirm_password_error']);
}
?>
<section>
    <div class="container">
        <a href="./index.php">Back</a>
        <h3 class="text-center">Personal Profile Management System</h3>
        <div class="wrapper flex">
            <div class="card">
                <h3 class="text-center">Account Login</h3>
                <form action="./_actions/login.php" method="post" class="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" maxlength="100" required>
                        <small class="text-danger"><?=$email_error ?? ''?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <small class="text-danger"><?=$password_error??''?></small>
                    </div>
                    <button type="submit" class="btn btn-lg">Login</button>
                </form>
            </div>
            <div class="card">
                <h3 class="text-center">Create Account</h3>
                <form action="./_actions/signup.php" method="post" id="registrationForm">
                    <div class="form-group">
                        <label for="email2">Email</label>
                        <input type="email" name="email2" id="email2" class="form-control" maxlength="100" required>
                        <small class="text-danger"><?=$email2_error ?? ''?></small>
                    </div>
                    <div class="form-group">
                        <label for="password2">Password</label>
                        <input type="password" name="password2" id="password2" class="form-control">
                        <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>
                        <small class="text-danger"><?=$password2_error??''?></small>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password" class="form-control">
                        <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>
                        <small class="text-danger"><?=$confirm_password_error??''?></small>
                    </div>
                    <button type="submit" name="submit" class="btn btn-lg">Register</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include "./_layouts/footer.php";
?>