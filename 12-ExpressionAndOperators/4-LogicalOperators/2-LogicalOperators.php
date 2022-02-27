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