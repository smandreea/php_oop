<?php 
include "includes/personClass.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $person1 = new Person("John", "Doe", "Blonde", "Brown");
    echo $person1->firstName . "<br/>";
    echo $person1->fullName() . "<br/>";

    ?>
</body>
</html>