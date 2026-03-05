<?php
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the data from the form
        $name = $_POST["name"];
        $age = $_POST["age"];

        // Display the data
        echo "<h2>Form Submitted Successfully!</h2>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
    } else {
        echo "No form data received.";
    }
?>