<?php header ("Content-type: text/html");?>
<!doctype html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
    <h2>Calculate the area using length and breath using integer</h2>
    <?php
        $length = 10;
        $breath = 20;
        $area = $length * $breath;
        echo $area;
    ?>
    <h2>Calculate student exact marks percentage with double:</h2>
    <?php
        $math = 50;
        $sport = 45;
        $total = $math + $sport;
        $totalmarks = 100;
        $percentage = $total / $totalmarks;
        echo $percentage;
    ?>
    <h2>Check if the user has admin roles</h2>
    <?php
       $user = "john";
       $hasroles = null;
       $adminroles = "admin";
       $userroles = "admin";

       $hasroles = ($adminroles == $userroles);
       echo ($hasroles) ? "$user has admin role" : "$user doesn't have admin role";
    ?>
    <h2>Define and display a user name using strings</h2>
    <?php
        $surname = "john";
        $name = "smith";
        $fullname = $surname . " " . "$name";
        echo $fullname;
    ?>
    <h2>Check if the variable is null or not</h2>
    <?php
        $input = "completed";
        $value = is_null($input);
        echo (!$value) ? "value" : "empty";
    ?>
    </body>
</html>
