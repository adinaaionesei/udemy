<?php
    //sample 1
    $length = 10;
    $breath = 20;
    $area = $length * $breath;

    echo "Area: $area" . "<br>";

    //sample 2
    $length = 10;
    $breath = 20;
    $area = $length * $breath;

    echo "Area: $area";

    //sample 3 with error
    $length = "a";
    $breath = "a";
    $area = $length * $breath;

    echo "Area: $area";
?>