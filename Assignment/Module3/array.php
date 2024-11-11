<!--Indexed Array: An array where the keys are numeric (starting from 0 by default).

Associative Array: An array where the keys are strings.

Multidimensional Array: An array that contains one or more arrays.
1. Declaring an Indexed Array
You can declare an indexed array using either the array() function or the [] shorthand.
-->
php
Copy code
// Using array() function
$numbers = array(1, 2, 3, 4, 5);

// Using [] shorthand
$fruits = ['apple', 'banana', 'orange'];

<!--2. Declaring an Associative Array
In an associative array, the keys are strings that you can define explicitly.-->

php
Copy code
// Using array() function
$person = array(
    "name" => "John",
    "age" => 30,
    "gender" => "male"
);

// Using [] shorthand
$person = [
    "name" => "John",
    "age" => 30,
    "gender" => "male"
];

<!--3. Declaring a Multidimensional Array
You can declare an array that contains other arrays inside it.-->

php
Copy code
// Using array() function
$people = array(
    array("name" => "John", "age" => 30),
    array("name" => "Jane", "age" => 25)
);

// Using [] shorthand
$people = [
    ["name" => "John", "age" => 30],
    ["name" => "Jane", "age" => 25]
];
