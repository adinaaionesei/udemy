<?php

    //define global
    global $name;

    //assign global
    $name = "Adina ";
    function print_name(){
        $name = "PHP ";
        echo $name;
    }
    print_name();
    echo $name;

    global $message1;

    $message = "welcome to php";
    function print_message1(){
        global $message1;
        $message1 = "this is changed ";
        echo $message1;
    }
    print_message1();
    echo $message1;