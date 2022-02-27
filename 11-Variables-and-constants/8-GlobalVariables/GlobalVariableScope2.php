<?php

    //define global
    global $name;

    //assign global
    $name = "Adina";
    function print_name(){
        $name = "PHP";
        echo $name;
    }
    print_name();
    echo $name;

    //sample 2
    global $message;

    $message = "welcome to php";
    function print_message(){
        echo $message;
    }
    print_message();
    echo $message;