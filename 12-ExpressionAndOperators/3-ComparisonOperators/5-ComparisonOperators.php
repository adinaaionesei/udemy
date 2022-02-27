<?php
header("Content-type: text/plain");
    //sample 1
    //use equal to == operator to check php version
    $php_version = 7.5;
    $php_system_version = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION;
    echo ($php_version == $php_system_version)? "V matched" : "doesn t match";

    //sample 2
    //data type and value identical ===
    $name1 = "10";
    $name2 = 10;

    echo PHP_EOL;
    echo ( $name1 === $name2) ? "Name matched" : "name doesn t match";
    echo PHP_EOL;
    echo ( $name1 == $name2) ? "Name matched" : "name doesn t match";
    $name3 = "10";
    echo PHP_EOL;
    echo ( $name1 === $name3) ? "Name matched" : "name doesn t match";

    //sample 3
    //find oranges using !=, <>, !==
    $specialfruit = "oranges";
    $fruit1 = "apple";
    $fruit2 = "oranges";

    echo PHP_EOL;
    echo ( $specialfruit != $fruit1) ? "it is not oranges" : "it s oranges";

    echo PHP_EOL;
    echo ( $specialfruit != $fruit2) ? "it is not oranges" : "it s oranges";

    echo PHP_EOL;
    echo ( $specialfruit <> $fruit2) ? "it is not oranges" : "it s oranges";

    //sample 5
    //find the senior citizen whose age greater or equal to 60 using greater operator
    $citizen1 = "john";
    $citizen2 = "walt";
    $citizen3 = "bob";

    $agelimit = 60;
    $citizenage1 = 40;
    $citizenage2 = 60;
    $citizenage3 = 80;

    echo PHP_EOL;
    echo ( $citizenage1 >= $agelimit) ? "$citizen1 is senior citizen" : "$citizen1 is not senior";
    echo PHP_EOL;
    echo ( $citizenage2 >= $agelimit) ? "$citizen2 is senior citizen" : "$citizen2 is not senior";
    echo PHP_EOL;
    echo ( $citizenage3 >= $agelimit) ? "$citizen3 is senior citizen" : "$citizen3 is not senior";

    echo PHP_EOL;
    echo ( $citizenage1 <= $agelimit) ? "$citizen1 is senior citizen" : "$citizen1 is not senior";
    echo PHP_EOL;
    echo ( $citizenage2 <= $agelimit) ? "$citizen2 is senior citizen" : "$citizen2 is not senior";
    echo PHP_EOL;
    echo ( $citizenage3 <= $agelimit) ? "$citizen3 is senior citizen" : "$citizen3 is not senior";