<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <h1 class="h3 mb-3">Login</h1>
        <form action="_actions/login.php" method="post">
            <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" id="password" class="form-control mb-2" placeholder="Password" required>
            <!-- <button type="submit" name="submit" class="w-100 btn btn-lg btn-primary">Login</button> -->
            <input type="submit" name="submit" value="Submit" class="w-100 btn btn-lg btn-primary">
        </form>
    </div>
</body>
</html>