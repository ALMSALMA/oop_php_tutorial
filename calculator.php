<?php 
    declare(strict_types = 1);      
    include 'includes/class_autoloader.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CALCULATOR</title>
    </head>
    <body>

        <form action="includes/calculator.inc.php" method="post">
            <p>My Calculator</p>
            <input type="number" name="num1">
            <select name="operation">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
            </select>
            <input type="number" name="num2">
            <button type="submit" name="submit">calculate</button>
        </form>
        
    </body>
</html>