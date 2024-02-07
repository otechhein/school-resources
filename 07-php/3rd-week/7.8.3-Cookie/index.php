<?php

// Set Cookie Data
setcookie("user", "John Doe");

// Accessing Cookie data
$username = $_COOKIE['user'];
echo $username;


// Deleting Cookie

setcookie('user', "", time() - 3600); //လွန်ခဲ့တဲ့ တစ်နာရီက ဖျက်လိုက်သည်။

unset($_COOKIE['user']);
