<?php
    //empty var
    $name;
    echo $name;

    //ternary operator
    echo isset($name) ? "variable set" : "variable is not set";

    $name = "john smith";
    echo isset($name) ? "variable set" : "variable is not set";

    $firstname = "test";
    $name = $firstname;
    echo isset($name) ? "variable set" : "variable is not set";