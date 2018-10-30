<?php 
include "includes/parentUsers.inc.php";
include "includes/newClass.inc.php";
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
    
    echo "First object <br>";
    $users = new Users;
    echo $users->userName;
    $users->setNewName("Larisa"); 
    echo $users->getName() . "<br>";
    echo $users;

    echo "<br>Second object <br>";
    $buyers = new Users;
    // unset($buyers);
    echo $buyers->userName;
    $buyers->setNewName("Lavinia");
    echo "<br>" . $buyers->getName() . "<br>";

    echo "Construct test <br>";
    $customers = new Users;

    echo "<br>Static properties and methods <br>";
    // echo Users::$staticVar . "<br/>";
    echo Users::staticMethod();


    
    ?>
</body>
</html>