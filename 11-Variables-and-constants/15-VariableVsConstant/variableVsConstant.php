<?php

    /*
     1-no need to use $ to use the constant
    2-constants are defined ony via the define method
    3-value can be assigned only once
    4-constant has global scope.can access anywhere
    5-constant can be used to access the constants
     */

    $name = "john smith";
    define (name, "john smith");

    echo $name . name;

    //able to change var but not constant
    $name = "walter white";
    define (name, "walter white");
    echo $name . name;
    echo "<hr>";

    function print_constant(){
        echo $name . name;
    }
    print_constant();