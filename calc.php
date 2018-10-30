<?php
include "includes/calculatorClass.inc.php";

if(isset($_POST['submit'])) {
    $calc1 = New Compute($_POST['number1'], $_POST['number2'], $_POST['operator']);
    // echo $calc1->setCalcNumbers();
    echo $calc1->getCalcNumbers();
}

?>