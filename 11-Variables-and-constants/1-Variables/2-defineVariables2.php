<!doctype html>

<html>
    <head>
        <title>Variables and constants</title>
    </head>
    <body>
        <!-- sample 1 -->
        <?php
        //define variable
        $aboutme="I am Adina and I love PHP Programming";
        echo "<h1>About me:</h1>";
        echo $aboutme; //printing var
        ?>

        <?php
        //change the var
        $aboutme = "text is changed now";
        echo $aboutme;
    ?>
    </body>
</html>