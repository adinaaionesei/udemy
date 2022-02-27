<?php

    $male = "john smith"; //male is a var
    $gender = "male"; //gender is holding a var name

    echo $gender;
    echo $$gender; // $($gender) ==> $(male)

    echo "<br>";
    $student = "john smith";
    $male = "student";
    $gender = "male";

    echo $gender;
    echo $$gender;
    echo $$$gender;
