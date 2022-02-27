<!DOCTYPE html>
<html>
    <head>
        <title>Exercises</title>
    </head>
    <body>
        <h2>add 2 numbers using arithmetical operators:</h2>
    </body>
    <?php
        $number1 = 10;
        $number2 = 20;
        $sum = $number1 + $number2;

        echo $sum . PHP_EOL;
    ?>
    <h2>find student passed or failed using conditional operators:</h2>
    <?php
        $result = "passed";
        echo ( $result === "passed") ? "passed" : "not passed";
    ?>
    <h2>Show a number is even or odd using comparison operators:</h2>
    <?php
        $number = 10;
        $result = $number%2;
        echo ( $result ==0 ) ? "even" : "odd";
    ?>
    <h2>check if user has access and login rights using logical operators</h2>
    <?php
        $haslogin = true;
        $hasaccess = true;
        echo ( $haslogin && $hasaccess ) ? "has access" : "doesn't have access";
    ?>
    <h2>assign an integer value and increment by 10 using assignment operator</h2>
    <?php
        $number = 10;
        $number += 10;
        echo $number;
    ?>
</html>





