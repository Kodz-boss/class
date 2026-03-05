<?php

    // function sayHello() {
    //     echo "Hello there! <br>";
    // }

    // //call the function
    // sayHello();
    // sayHello();
    // sayHello();


    // function introduce($name, $age, $country){
    //     echo "Hi my name is: " . $name . ",I am " . $age . "years old and i am from " . $country . "<br>"; 
    // }

    // introduce("Alice", 25, "Ghana");
    // introduce("Sewa", 21, "Nigeria");
    // introduce("Victor", 22, "Togo");

    //Built in functions for php
    //1. String functions{This lets you work and manipulate text}
    // $text = "Hello WOrld, Welcome  to php";

    // //Count the number of characters - strlen
    // echo strlen($text) . "<br>";

    // //convert to uppercase - strtoupper
    // echo strtoupper($text) . "<br>";

    // //convert to lowercase - strtolower
    // echo strtolower($text) . "<br>";

    // //reverse the text -strrev
    // echo strrev($text) . "<br>";

    // //count the number of words - str_word_count
    // echo str_word_count($text) . "<br>";

    // //Replace a with another - str_replace
    // echo str_replace("php", "Programming", $text) ."<br>";


    //number functions
    // $number = 7;

    // //round to the nearest whole number
    // echo round($number) . "<br>";

    // //round DOWN always
    // echo floor($number) . "<br>";

    // //round UP always
    // echo ceil($number) . "<br>";

    // //Absolute values (Removes negative sign)
    // echo abs(-15) . "<br>";

    // //Generate a random number between 1 and 100
    // echo rand(1, 100) . "<br>";

    //Array functions

    // $numbers = [5, 2, 8, 1, 9, 3, 7];

    // // Sort in ascending order
    // sort($numbers);
    // echo "Sorted: ";
    // foreach ($numbers as $num) {
    //     echo $num . " ";
    // }
    // echo "<br>";

    // // Find the total
    // echo "Sum: " . array_sum($numbers) . "<br>";

    // // Find the highest value
    // echo "Highest: " . max($numbers) . "<br>";

    // // Find the lowest value
    // echo "Lowest: " . min($numbers) . "<br>";

    // // Count items
    // echo "Count: " . count($numbers) . "<br>";


    //variable scope
    // $message = "I am outside the function";

    // function testScope($msg) {
    //     echo $msg;
    // }

    // testScope($message);


    //working with strings in depth 
    $firstName = "Chuka";
    $lastName = "Ada";

    //using the dot operator
    $fullName = $firstName . "" . $lastName;
    echo $fullName . "<br>";

    //using variables directly in double quotes
    echo "Hello, $firstName $lastName!<br>";

    //curly braces for clarity
    echo " Hello, {$firstName} {$lastName}!<br>";
?>