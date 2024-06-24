<?php

require_once "../_config/db.php";

session_start();

$email = $password = $confirm_password = '';
$email2_error = $password_error = $confirm_password_error = '';

if (isset($_POST['submit'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['email2'])) {
            $email_error = 'Email is required';
            $_SESSION['email2_error'] = $email_error;
        } else {
            $email = htmlspecialchars($_POST['email2']);
        }
        if (empty($_POST['password2'])) {
            $password_error = 'Password is required';
            $_SESSION['password2_error'] = $password_error;
        } else {
            $password = $_POST['password2'];
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $special_chars = preg_match('@[^\w]@', $password);
            if (!$uppercase || !$lowercase || !$number || !$special_chars){
                $_SESSION['password2_error'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            }
            $password = htmlspecialchars($_POST['password2']);
        }
        if (empty($_POST['confirm-password'])) {
            $confirm_password_error = 'Confirm Password is required';
            $_SESSION['confirm_password_error'] = $confirm_password_error;
        } else {
            $confirm_password = htmlspecialchars($_POST['confirm-password']);
            if ($password !== $confirm_password) {
                $confirm_password_error = 'Passwords do not match';
                $_SESSION['confirm_password_error'] = $confirm_password_error;
            }
        }

        if (empty($email_error) && empty($password_error) && empty($confirm_password_error)) {
            $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', md5($password), PDO::PARAM_STR);

            try {
                $stmt->execute();
                if ($conn->lastInsertId())
                    $_SESSION['loggedin'] = true;
                    header("Location: ../profile.php");
                    exit();
            } catch (PDOException $e) {
                die("Error:" . $e->getMessage());
            }
        } else {
            header("Location: ../login.php");
            exit;
        }
    }
}
