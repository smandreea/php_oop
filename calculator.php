<?php include "includes/calculatorClass.inc.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="calc.php" method="POST">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <select name="operator">
            <option value="add">Add</option>
            <option value="substract">Substract</option>
            <option value="divide">Divide</option>
        </select>
        <button type="submit" value="Calculate" name="submit">Calculate</button>
    </form>
</body>
</html>