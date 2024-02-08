<?php

declare(strict_types=1);
include 'includes/class-autoload.inc.php';
// declare(strict_types = 1);
// include('class-autoload.inc.php');

// echo $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $operation = $_POST['operation'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // var_dump($operation, $num1, $num2);die;

    $calc = new Calc($operation, (int)$num1, (int)$num2);

    // var_dump($calc);die;

    try {
        // echo "Result" . "<br>";
        $result = $calc->calculator();
    } catch (TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-uppercase font-weight-bold">Mini Calculator</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="num1">First Number</label>
                <input type="number" class="form-control" name="num1" id="num1" placeholder="Enter First Number" required>
            </div>

            <div class="form-group mt-3">
                <label for="operation">Operation</label>
                <select class="form-control" name="operation" id="operation" required>
                    <option value="add">Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="div">Division</option>
                    <option value="mul">Multiplication</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="num2">Second Number</label>
                <input type="number" class="form-control" name="num2" id="num2" placeholder="Enter Second Number" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Calculate</button>
        </form>

        <div class="result mt-3">
            <h3><?= isset($result) ? $result : 'No Result' ?></h3>
        </div>
</body>

</html>