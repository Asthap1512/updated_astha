<html>
<head>
<title>Result</title>
</head>
<body>
<form action="" method="POST">
	<p>Gujarati: <input type="number" name="num1" required /></p>
	<p>Hinde: <input type="number" name="num2" required /></p>
	<p>English: <input type="number" name="num3" required /></p>
	<p>Science: <input type="number" name="num4" required /></p>
	<p>Maths: <input type="number" name="num5" required /></p>
	

	<button type="submit">submit</button>
	
</form>
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$Gujarati=$_POST['num1'];
	$hinde=$_POST['num2'];
    $English=$_POST['num3'];
    $Science=$_POST['num4'];
    $Maths=$_POST['num5'];


$totalMarks = $Gujarati + $hinde + $English + $Science + $Maths;
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
?>
