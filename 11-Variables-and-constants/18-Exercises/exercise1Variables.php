<!doctype html>
<html>
    <head>

    </head>
    <body>
        <h1>Ex 1: Create and display variables</h1>
        <?php
            $name = "john smith";
            echo $name;
        ?>

        <h2>String variable</h2>
        <?php
            echo $name;
        ?>

        <h2>integer variable</h2>
        <?php
            $counter = 1;
            echo $counter;
        ?>

        <h2>print variable from function</h2>
        <?php
            function print_counter(){
                $message = "hello";
                echo $message;
            }
            print_counter();
        ?>

        <h2>Static variable</h2>
        <?php
            static $test = 1;
            echo $test;
        ?>

        <h2>Global variable</h2>
        <?php
            global $version;
            $version = 7.3;
            echo $GLOBALS['version'];
        ?>
        <h2>Super Global variables</h2>
        <?php
            echo $GLOBALS['version'];
        ?>

        <h2>Variables of variables</h2>
        <?php
            $name = "adina";
            $student = "name";
            echo "student name is " . $$student;
        ?>
    </body>
</html>
