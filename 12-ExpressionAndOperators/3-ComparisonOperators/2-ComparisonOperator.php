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