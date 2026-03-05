<?php
 // Shopping Cart Calculator - Exercise 2 Solution
 
 // Create an array with product prices
 $prices = [9.99, 15.50, 22.75, 5.99, 13.22];
 
 // Calculate total cost using array_sum()
 $totalCost = array_sum($prices);
 
 // Count how many items using count()
 $itemCount = count($prices);
 
 // Find most expensive item using max()
 $mostExpensive = max($prices);
 
 // Find cheapest item using min()
 $cheapest = min($prices);
 
 // Calculate average price per item
 $averagePrice = $totalCost / $itemCount;
 // Round to 2 decimal places
 $averagePrice = round($averagePrice, 2);
 
 // Display everything with clear labels
 echo "<h2>Shopping Cart Summary</h2>";
 echo "--------------------<br>";
 echo "Items in cart: " . $itemCount . "<br>";
 echo "Total cost: $" . number_format($totalCost, 2) . "<br>";
 echo "Most expensive item: $" . number_format($mostExpensive, 2) . "<br>";
 echo "Cheapest item: $" . number_format($cheapest, 2) . "<br>";
 echo "Average price per item: $" . number_format($averagePrice, 2) . "<br>";
 
 echo "<br><br>";
 echo "<strong>Individual Prices:</strong><br>";
 foreach ($prices as $index => $price) {
 echo "Item " . ($index + 1) . ": $" . number_format($price, 2) . "<br>";
 }

 
?>