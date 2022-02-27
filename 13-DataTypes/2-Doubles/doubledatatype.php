<?php
header ("content-type: text/plain");

    //define and print decimal values
    $totalscore = 78.87;
    echo $totalscore . PHP_EOL;

    //NEGATIVE DECIMALS
    $temperature = -40.23;
    echo $temperature . PHP_EOL;

    //round a double value
    $price = 4.99;
    echo round($price) . PHP_EOL;

    //compare two double with precision 0.1 = 1.87 ~ 1.98
    $price = 1.87;
    $bid = 1.97;
    echo ( abs($price - $bid) < 0.1 ) ? "accept the offer" : "reject";
