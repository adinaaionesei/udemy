<?php
    //sample 1
    //define constant
    //define( NAME OF THE CONSTANT, VALUE OF THE CONSTANT);
    define("LANGUAGE", "PHP");
    $lang = LANGUAGE;

    echo "this program is writting using $lang <br>";
    echo "this program is writting using LANGUAGE <br>";
    echo "this program is writting using" . LANGUAGE .  "<br>";

    //sample 2
    define ("LANGUAGE", "JAVA");

    echo "this program is writting using" . LANGUAGE .  "<br>";

