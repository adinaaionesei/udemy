<!doctype html>

<html>
    <head>
        <title>PHP and HTML</title>
    </head>
    <body>
    <h1>Embed PHP in HTML</h1>
    <!-- sample 1 -->
    <?php echo "hello world" ?>
    <!-- sample 1 -->
    <?php
        print "<p>sample 1: this is printed from PHP</p>"
    ?>

    <?= "<hr>" ?>
    <p>
        <?php
            echo "sample 2: this is from PHP";
        ?>
    </p>
    </body>
</html>