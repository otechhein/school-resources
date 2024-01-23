<?php
// Session
session_start();

if ($_POST['submit']) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email === 'maungmaung@gmail.com' && $password === '12345'){
        $_SESSION['user'] = ['username' => 'maungmaung'];
        $username = $_SESSION['user']['username'];
        header("Location: ../profile.php?username=" . $username);
    }else{
        header('Location: ../index.php?incorrect=1');
    }
}else{
    echo "User does not click submit button";
}
