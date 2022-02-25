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