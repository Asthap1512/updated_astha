<?php
// Array with multiple values
$fruits = ['apple', 'banana', 'orange', 'mango', 'pineapple'];

// Get 2 random values from the array
$randomKeys = array_rand($fruits, 2);

// Print random values
echo $fruits[$randomKeys[0]] . "\n";
echo $fruits[$randomKeys[1]] . "\n";
?>