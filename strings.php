<?php
include "exsolutions.php";
function echoExercises() {
    echo nl2br("1. Write a PHP script to : -
    a) transform a string all uppercase letters.
    b) transform a string all lowercase letters.
    c) make a string's first character uppercase.
    d) make a string's first character of all the words uppercase.\n\n");
    ex1();
    echo "<br>";
    echo "<br>";

    echo nl2br("2. Write a PHP script to split the following string.
    Sample string : '082307'
    Expected Output : 08:23:07\n\n");
    ex2();
    echo "<br>";
    echo "<br>";

    //ex13();
}