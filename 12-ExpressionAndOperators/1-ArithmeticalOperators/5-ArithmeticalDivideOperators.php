<?php

    /*
    Addition = +
    Subtraction = -
    Multiplication = *
    Division = /
    Modulus = %
    Exponentiation = **

     */
    //sample 1
    //calculate the student total marks for 3 subjects

    $maths = 70;
    $science = 30;
    $english = 80;
    $totalMarks = $maths + $science +$english;
    echo "student total marks: $totalMarks for Maths ($maths)
             + science($science) + english($english)" . PHP_EOL;

    //SAMPLE 2
    //Display the total without a $totalMarks variable
    echo "student total marks: " . ($maths + $science + $english) . "for Maths ($maths)
             + science($science) + english($english)" . PHP_EOL;

    //sample 3
    //find the difference between marks achieved and total marks
    $totalSubjects = 300;
    $totalDifference = $totalSubjects - $totalMarks;
    echo "Difference between total and marks achieved : $totalDifference" . PHP_EOL;

    //sample 5
    //calculate the percentage of overall scored marks
    $percentage = ($totalMarks / $totalSubjects) * 100;
    echo "Percentage scored: $percentage%" . PHP_EOL;