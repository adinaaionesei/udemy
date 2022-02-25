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
    <h1>Combine String and Integer</h1>
    <?php
        echo "$name: $message<br>";
        echo "name: $name<br>";
        $language = "PHP ";
        echo $language . "version is" . $version . "<br>";
    ?>
    <h1>Add 2 values</h1>
    <?php
        $firstvalue = 10;
        $secondvalue = 20;
        $total = $firstvalue + $secondvalue;

        echo "Total: ". $total;
    ?>
    </body>
</html>