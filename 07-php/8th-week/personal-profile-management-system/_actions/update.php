<?php

require_once "../_config/db.php";
session_start();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm-password']);

    if(empty($name)){
        $_SESSION['name_error'] = "Please fill your name";
    }

    if(!empty($phone)){
        if(!validatePhoneNumber($phone)){
           $_SESSION['phone_error'] = "Invalid phone number"; 
        }
    }else{
        $_SESSION['phone_error'] = "Please fill your phone number";
    }

    if(empty($address)){
        $_SESSION['address_error'] = "Please fill your address";
    }
    if(empty($email)){
        $_SESSION['email_error'] = "Please fill your email";
    }
    if(empty($password)){
        $_SESSION['password_error'] = "Please fill your password";
    }elseif($password !== $confirm_password){
        $_SESSION['confirm_password_error'] = "Passwords do not match";
    }
    header("Location: ../profile.php");
    exit;
}

function validatePhoneNumber($phoneNumber){
    $phoneNumber = preg_replace('/\D/', '', $phoneNumber);

    if(preg_match('/^(?:\+?95)?\d{9}$/', $phoneNumber)){
        return true;
    }else{
        return false;
    }
}
