<?php 

    declare(strict_types = 1);      // force user to enter the desired datatypr like string, int ... (Must be the first line)

    // var_dump($object);           // shows everything about object

    // include 'classes/person.class.php'; // in large projects including every single class is not efficient and may
                                        // cause problems so it's better to use the following
    include 'includes/class_autoloader.inc.php';

   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>OOP PHP TUTORIAL</title>
    </head>
    <body>
        <?php
        try {

            $NewUser = new Person();    
            $Mohammad = new Person( 'Mohammad', 'Al Msalma', 23);
            echo $NewUser->getName();
            echo $Mohammad->getName();
            // var_dump($Mohammad);
            // unset($NewUser);                 // delete object
            // echo $NewUser->getName();        // will give error
            echo Person::$sub.'<br/>';
            Person::newSub('Awesome');
            echo Person::$sub;
            
        } catch (TypeError $e) {
            echo "Error!: " . $e->getMessage();
        }
            
        ?>
    </body>
</html>