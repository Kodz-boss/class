<?php

//arrays

// $fruits = ["apple", "banana", "cherry", "date", "elderberry"];

// echo $fruits[0] . "<br>";
// echo $fruits[1] . "<br>";
// echo $fruits[2] . "<br>";
// echo $fruits[3] . "<br>";
// echo $fruits[4] . "<br>";

$fruits = array("apple", "banana", "cherry", "date", "elderberry");

//add a new Item at the end
$fruits[] = "fig";

//loop through and display the array

foreach($fruits as $fruit){
    echo $fruit . "<br>";
}

//combining them together

$studentName = "Kodi";
$scores = [82, 90, 95, 60, 35];
$total = 0;

echo "<h2> Report for : " . $studentName .  "</h2>";

foreach($scores as $scores){
         echo "-" . $scores .  "<br>";
         $total = $total + $scores;
        }

        $average = $total / count($scores);

        echo "<br>Total Score: " . $total;
        echo "<br>Average Score: " . $average;
    
        if ($average >= 90) {
            echo "<br>Grade: A — Outstanding!";
        } elseif ($average >= 80) {
            echo "<br>Grade: B — Great work!";
        } elseif ($average >= 70) {
            echo "<br>Grade: C — Good effort!";
        } else {
            echo "<br>Grade: D — Needs improvement.";
        }




?>