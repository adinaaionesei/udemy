<?php
header ("content-type: text/plain");

    $name = null;
    echo $name . PHP_EOL;
    echo ($name) ? "has value" : "empty" . PHP_EOL;

    //CHECK if the var is null or not
    $name = "o";
    echo ($name) ? "has value" : "empty" . PHP_EOL;
    echo ( !is_null($name) ) ? "has value" : "empty" . PHP_EOL;

    //remove the variable from the program and memory
    echo $name . PHP_EOL;
    unset($name);
    echo $name . PHP_EOL;
    echo ( !is_null($name) ) ? "has value" : "empty" . PHP_EOL;
