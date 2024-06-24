<?php
session_start();
require_once "../_config/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if (empty($email)) {
        $_SESSION['email_error'] = "Please fill your email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email_error'] = "Invalid email format";
    }

    if (empty($password)) {
        $_SESSION['password_error'] = "Please fill your password";
    }
    $password = md5($password);
    $query = "SELECT * FROM users where email = :email AND password = :password";

    $stmt = $conn->prepare($query);
    // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    // $stmt->bindParam(':password', $password, PDO::PARAM_STR);

    try {
        $stmt->execute(['email' => $email, 'password' => $password]);
        $user = $stmt->fetch();
        if (!empty($user)) {
            $_SESSION['loggedin'] = true;
            header("Location: ../profile.php");
            exit;
        } else {
            header("Location: ../login.php");
            exit;
        }
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
}
