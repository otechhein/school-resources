<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the email address from the form
    $email = $_POST["email"];
    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Valid email address: $email";
    } else {
        $message = "Invalid email address: $email";
    }
} else {
    // Redirect back to the form if not a POST request
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Email Validation Result</title>
</head>

<body>
    <h1>Email Validation Result</h1>
    <p><?php echo $message; ?></p>
    <a href="index.php">Go back</a>
</body>

</html>