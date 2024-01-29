<?php
    declare(strict_types = 1);
    include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
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
</body>
</html>