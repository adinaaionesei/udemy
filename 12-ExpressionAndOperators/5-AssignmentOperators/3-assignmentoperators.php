<?php

    $marks = 10;
    $name = "john smith";
    $counter = 1;
    $counter = $counter + 1;
    $counter += $counter;

    echo $counter . PHP_EOL;

    $marks +=10;
    echo $marks . PHP_EOL;

    echo $name . PHP_EOL;
    $name1 = "john";
    $name1 .= ", ";
    $name1 .= "smith";
    echo $name1 . PHP_EOL;

    //SAMPLE 2 use -
    $counter = 1;
    $counter = $counter - 1;
    $counter -= $counter;
    echo $counter . PHP_EOL;

    //use *=
    $square = 10;
    $square *= $square;
    echo $square . PHP_EOL;

    //sample 3 use /=
    $divideby2 = 50;
    $divideby2 /= 2;
    echo $divideby2 . PHP_EOL;

    //USE %=
    $remainder = 50;
    $remainder %= 2;
    echo $remainder . PHP_EOL;



