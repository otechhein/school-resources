<?php

// Start Session
session_start(); // အစပြု

// Store Data in Session Variable

$_SESSION['username'] = "Kyaw Kyaw";  //သိမ်းတယ်

// Accessing Store Data

$username = $_SESSION['username']; // ယူတာ

echo $username; // ထုတ်

// Updating Session Variable

$_SESSION['username'] = "Maung Maung"; // ပြင်တာ

// Unsetting Session Variable

unset($_SESSION['username']);   // undefined

// Unset all session variable
session_unset();    // undefined all session

// Destroying Session

session_destroy(); // Delete