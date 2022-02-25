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
        <!-- sample 3 -->
        <p style="color: #006BD6">Sample 3: blue text</p>
        <p <?= 'style="color:red;" ' ?>>Sample 4: red text</p>

        <!-- sample4 -->
        <?= "<p>" ?>
            Sample 4:this is from php
        <?= "</p>" ?>
    </body>
</html>