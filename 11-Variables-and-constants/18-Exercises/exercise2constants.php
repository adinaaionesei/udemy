<!doctype html>
<html>
    <head>

    </head>
    <body>
        <h1>Ex 2: define and display constants</h1>
        <?php
            define ("ADINA", "ALEXANDRA");
            echo ADINA;
        ?>

        <h2>String constants</h2>
        <?php
            echo ADINA;
        ?>

        <h2>integer constant</h2>
        <?php
            define ("PROGRAM_VERSION", 7.3);
            echo PROGRAM_VERSION;
        ?>

        <h2>print constant from function</h2>
        <?php
            function print_version(){
            echo PROGRAM_VERSION;
        }
        print_version();
        ?>

        <h2>display magic constant</h2>
    <?php
        echo __LINE__;

    ?>
    </body>
</html>

