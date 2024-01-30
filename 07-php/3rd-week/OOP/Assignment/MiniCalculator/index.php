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
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <p>My Own Calculator</p>
        <input type="number" name="num1" id="num1" placeholder="First Number">
        <select name="operation" id="operation">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" id="num2" placeholder="Second Number">
        <button type="submit">Calculate</button>
    </form>

    <div class="result">
        <h3><?= isset($result) ? $result : 'No Result' ?></h3>
    </div>
</body>

</html>