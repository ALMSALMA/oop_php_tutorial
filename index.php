<?php 
    include 'classes/person.inc.php';
   // var_dump($object);                // shows everything about object
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP PHP TUTORIAL</title>
</head>
<body>
    <?php

        $NewUser = new Person();    
        $Mohammad = new Person('Mohammad', 'Al Msalma', 23);
        echo $NewUser->getName();
        echo $Mohammad->getName();
        // var_dump($Mohammad);
        // unset($NewUser);                 // delete object
        // echo $NewUser->getName();        // will give error
        echo Person::$sub.'<br/>';
        Person::newSub('Awesome');
        echo Person::$sub;
    ?>
</body>
</html>