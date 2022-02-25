<?php
    //sample 1
    //define function
    //function declare
    function add(){
        //function body
        $firstvalue = 10;
        $secondvalue = 20;
        $total = $firstvalue + $secondvalue;
        echo $total . "<br>";
    }
    //call function
    add();

    //sample 3
    welcome_message();
    function welcome_message(){
        echo "welcome to php";
    }