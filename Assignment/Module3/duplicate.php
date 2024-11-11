<?php
// Original array with duplicate values
$numbers = [1, 2, 2, 3, 4, 4, 5, 6, 6, 7];

// Remove duplicate values
$uniqueNumbers = array_unique($numbers);

// Print the array after removing duplicates
print_r($uniqueNumbers);
?>