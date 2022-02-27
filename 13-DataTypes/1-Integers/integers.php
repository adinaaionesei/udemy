<?php
header ("content-type: text/plain");

//define and print
$marks = 87;
echo $marks . PHP_EOL;

//hexadecimal value
$marks = 0x19F2D7C1; //435345345;
echo $marks . PHP_EOL;

//string to integer
$marks = 10;
$total = "1000" + $marks;
echo $total . PHP_EOL;

//negative numbers
$finalMarks = 5 - 10;
echo $finalMarks;

$finalMarks = -5 + 5;
echo $finalMarks;
