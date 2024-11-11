<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post">
	<p>physics: <input type="number" name="num1" required /></p>
	<p>chemistry: <input type="number" name="num2" required /></p>
	<p>biology: <input type="number" name="num3" required /></p>
	<p>mathematics: <input type="number" name="num4" required /></p>
	<p>computer: <input type="number" name="num5" required /></p>
	

	<button type="submit">submit</button>
</form>
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

	$physics=$_POST['num1'];
	$chemistry=$_POST['num1'];
    $biology=$_POST['num1'];
    $mathematics=$_POST['num1'];
    $computer=$_POST['num1'];

$totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
$percentage = ($totalMarks / 500) * 100;


if ($percentage >= 90) {
    $grade = 'A+';
} elseif ($percentage >= 80) {
    $grade = 'A';
} elseif ($percentage >= 70) {
    $grade = 'B+';
} elseif ($percentage >= 60) {
    $grade = 'B';
} elseif ($percentage >= 50) {
    $grade = 'C';
} else {
    $grade = 'D';
}


echo "<h2>Results:</h2>";
echo "total Marks:".$totalMarks."<br>";
echo "percentagr:".$percentage."%<br>";
echo "grade:".$grade."<br>";

}


$dayIndex = 5; 

switch ($dayIndex) {
    case 1:
        $dayName = 'Sunday';
        break;
    case 2:
        $dayName = 'Monday';
        break;
    case 3:
        $dayName = 'Tuesday';
        break;
    case 4:
        $dayName = 'Wednesday';
        break;
    case 5:
        $dayName = 'Thursday';
        break;
    case 6:
        $dayName = 'Friday';
        break;
    case 7:
        $dayName = 'Saturday';
        break;
    default:
        $dayName = 'Invalid day index';
        break;
}

// Display the result
echo "The day corresponding to index $dayIndex is: $dayName\n";

?>