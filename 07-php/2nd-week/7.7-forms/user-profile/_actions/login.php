<?php
// Session
session_start();

if ($_POST['submit']) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email === 'maungmaung@gmail.com' && $password === '12345'){
        $_SESSION['user'] = ['username' => 'maungmaung'];
        header('Location: ../profile.php');
    }else{
        header('Location: ../profile.php?incorrect=1');
    }
}else{
    echo "User does not click submit button";
}
