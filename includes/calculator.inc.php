<?php 
    declare(strict_types = 1);      
    include 'class_autoloader.inc.php'; 

    $operation = $_POST['operation'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    $calculate = new Calculator($operation, (int)$num1, (int)$num2, );

    try {
        echo $calculate->calculate();
    } catch (TyoeError $e) {
        echo 'Error!: ' . $e->getMessage();
    }

?>