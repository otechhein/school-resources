<?php

session_start();

if (isset($_SESSION["loggedIn"])) {
  header("Location: index.php?page=1");
  exit();
} else {

  if (isset($_POST["submit"])) {

    if (empty($_POST["username"]) or empty($_POST["password"])) {
      echo "<div role='alert'>Please fill out all the fields!</div>";
    }

    require_once("../settings/Database.php");
    require_once("../settings/functions.php");
    require_once("./classes/Login.php");

    $db = new Database;
    $login = new Login($db->conn);

    $login->username = security($_POST["username"]);
    $login->password = security($_POST["password"]);

    if ($login->login()->rowCount() > 0) {

      $manager = $login->login()->fetch(PDO::FETCH_OBJ);

      $_SESSION["loggedIn"] = true;
      $_SESSION["id"] = $manager->Id;
      $_SESSION["username"] = $manager->Username;
      echo "<div role='alert'>Logged in successfully</div>";
      header("refresh:3; url=index.php?page=1");
    } else {
      echo "<div role='alert'>Your username or password is incorrect! Please check and try again.</div>";
    }
  }
?>
  <!DOCTYPE html>
  <html lang="tr-TR">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>

  <body>

    <div class="container mt-5">
      <h1 class="text-center">Admin Login</h1>

      <form action="" method="POST" class="mt-4">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" required name="username" placeholder="Enter your username" />
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" required name="password" placeholder="Enter your password" />
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Log In</button>
      </form>
    </div>
  </body>

  </html>
<?php } ?>