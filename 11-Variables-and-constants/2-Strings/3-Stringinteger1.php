<!doctype html>

<html>
    <head>
        <title>Variables and constants</title>
    </head>
    <body>
    <h1>Define strings</h1>
    <?php
        $name = "John, Smith";
        $message = "this is a string message";
        echo $name . ":" . $message . "<br>";
        echo "$name : $message";
    ?>
    <h1>Define integers</h1>
    <?php
        $version = 7.3;
        echo "php version is $version";
    ?>
    </body>
</html>