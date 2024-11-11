<?php
$jsonString = '{"name":"John", "age":30, "city":"New York"}';

// Decode the JSON string to an associative array
$data = json_decode($jsonString, true);

// Print the decoded array
print_r($data);
?>