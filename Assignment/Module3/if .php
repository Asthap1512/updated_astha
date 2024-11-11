<!---Write a PHP program to check Leap years between 1901 to 2016 Using
nested if.--->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>
<body>
    <h1>Leap Years between 1901 and 2016</h1>
    <ul></ul>
</body>
</html>
<?php

$startYear = 1901;
$endYear = 2016;


for ($year = $startYear; $year <= $endYear; $year++) {
    
    
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                
                $isLeapYear = true;
            } else {
                                $isLeapYear = false;
            }
        } else {
                        $isLeapYear = true;
        }
    } else {
        $isLeapYear = false;
    }
    
    if ($isLeapYear) {
        echo "$year is a leap year.\n";
    } else {
        echo "$year is not a leap year.\n";
    }
}
?>