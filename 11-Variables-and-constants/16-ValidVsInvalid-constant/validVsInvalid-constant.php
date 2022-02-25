<?php
    //good practice 1:always use UPPERCASE to define constants
    define (LANGUAGE,"PHP");
    define (VERSION,7.3);

    //good practice 2: do not use constants like _CONSTANTS_
    define (_CONSTANT_, "wrong practice");

    //good practice 3: avoid same name as Variable
    $name = "john smith";
    define (NAME, "john smith");

    //good practice: use the same naming convention
    //do not start var or constant name with integers
    $_1message = "hello";
    define (_1message, "hello");
    echo $_1message;

