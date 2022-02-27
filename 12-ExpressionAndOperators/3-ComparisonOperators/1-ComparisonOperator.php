<?php

    //sample 1
    //use equal to == operator to check php version
    $php_version = 7.5;
    $php_system_version = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION;
    echo ($php_version == $php_system_version)? "V matched" : "doesn t match";