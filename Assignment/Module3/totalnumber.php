<?php
// Array of integers
$numbers = [10, 20, 30, 40, 50];

// Initialize total to 0
$total = 0;

// Loop through the array and calculate the total
for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}

// Print the total
echo "The total is: " . $total;
?>