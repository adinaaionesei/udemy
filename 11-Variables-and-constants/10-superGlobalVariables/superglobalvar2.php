<?php
    //sample 1
    global $message;
    $message = "welcome to PHP";
    echo $GLOBALS['message'] . "<br>";

    //sample 2
    echo "filename" . $_SERVER['PHP_SELF'];