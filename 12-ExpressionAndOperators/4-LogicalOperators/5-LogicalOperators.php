<?php
    header("Content-type: text/plain");

    //sample 1
    //greet hello, name if user is logged in and has permision

    $permission = true;
    $loggedin = true;
    $user = "john smith";
    echo ( $permission and $loggedin) ? "hello $user" : "hello guest";
    echo PHP_EOL;

    //sample 2
    //check if student passed any one exam
    $student = "john";
    $mathspassed = true;
    $sciencepassed = true;

    //either this or that is true
    echo ($mathspassed or $sciencepassed) ? "$student has passed" : "$student has not passed";

    //sample 3
    //find the diff between and &&
    //operator precedence
    $result1 = true && false;
    $result2 = true && false;

    echo ($result1) ? "true" : "false";
    echo PHP_EOL;
    echo ($result2) ? "true" : "false";
    ECHO PHP_EOL;

    //sample 4
    $result1 = true || false;
    $result2 = true or false;

    echo ($result1) ? "true" : "false";
    echo PHP_EOL;
    echo ($result2) ? "true" : "false";
    ECHO PHP_EOL;

    $result1 = true && false;
    $result2 = true && false;

    echo (true || false) ? "true" : "false";
    echo PHP_EOL;
    echo (true or false) ? "true" : "false";
    ECHO PHP_EOL;

    $result1 = false && true;
    $result2 = false && true;

    echo ($result1) ? "true" : "false";
    echo PHP_EOL;
    echo ($result2) ? "true" : "false";
    echo PHP_EOL;

    //.sample 5
    //check if student is not passed and print the results
    $total = 36;
    $passingMarks = 35;
    $isPassed = ($total >= $passingMarks) ? true : false;
    echo (!$isPassed) ? "Not Passed" : "Passed";
    echo PHP_EOL;