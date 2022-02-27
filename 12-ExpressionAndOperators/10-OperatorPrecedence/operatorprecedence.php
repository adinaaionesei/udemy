<?php
header("content-type: text/plain");
    $val = 10;
    echo $val++;
    $counter = $val++;
    echo $counter;
    echo $val . PHP_EOL;

    //guess the outpout
    $val = 5 * 2 + 5;
    echo $val;

    $result1 = true && false;
    $result2 = true and false;

    echo ($result1) ? "true" : "false";
    echo ($result2) ? "true" : "false";
