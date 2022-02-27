<?php
header("Content-type: text/plain");

//sample 1
//greet hello, name if user is logged in and has permision

    $permission = true;
    $loggedin = true;
    $user = "john smith";
    echo ( $permission and $loggedin) ? "hello $user" : "hello guest";
    echo PHP_EOL;