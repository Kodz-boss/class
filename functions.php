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
    $text = "Hello WOrld, Welcome  to php";

    //Count the number of characters - strlen
    echo strlen($text) . "<br>";

    //convert to uppercase - strtoupper
    echo strtoupper($text) . "<br>";

    //convert to lowercase - strtolower
    echo strtolower($text) . "<br>";

    //reverse the text -strrev
    echo strrev($text) . "<br>";

    //count the number of words - str_word_count
    echo str_word_count($text) . "<br>";

    //Replace a with another - str_replace
    echo str_replace("php", "Programming", $text) ."<br>";
