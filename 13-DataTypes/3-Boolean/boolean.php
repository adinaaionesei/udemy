<?php
header("Content-type: text/plain");
    //define and use

    $flag1 = true;
    $flag2 = false;
    echo ($flag1) ? "true" : "false";
    echO PHP_EOL;
    echo ($flag2) ? "true" : "false";
    echO PHP_EOL;

    //print boolean variables
    echo "true" . $flag1 . PHP_EOL;
    echo "false" . $flag2 . PHP_EOL;

    //use a string as boolean condition
    $isloggedin = true;
    $usersessionname = "john smith";
    echo ( $isloggedin && $usersessionname) ? "user logged in" : "not logged in";
    echo PHP_EOL;

    $isloggedin = true;
    $usersessionname = null;
    echo ( $isloggedin && $usersessionname) ? "user logged in" : "not logged in";
    echo PHP_EOL;

    //use int var as boolean - watchout for negative values
    $marks = 1;
    echo ($marks) ? "marks has value" : "doesn't have value";
    echo PHP_EOL;

    //operators results into boolean condition
    $name = "john";
    echO ( $name === "john") ? "yes john" : "not john";
    echo PHP_EOL;
