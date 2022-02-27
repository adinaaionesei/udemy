<?php
header ("content-type: text/plain");

    //define string and use strings
    $name1 = "john smith";
    $name2 = "john smith";

    echo "$name1 and $name1" . PHP_EOL;
    echo '$name1 and $name1' . PHP_EOL;

    //combine string
    $name3 = $name1 . " - " . $name2;
    echo $name3 . PHP_EOL;

    //use back slash to escape the characters
    $name4 = "this is a \"special\" string";
    echo $name4 . PHP_EOL;

    $name4 = "\t\t this is a \"special\" string";
    echo $name4 . PHP_EOL;


