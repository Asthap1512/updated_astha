<!---Write a PHP program to find the largest of three numbers using ternary
Operator. --->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
</head>
<body>
    <h1>Find the Largest of Three Numbers</h1>
    
    <!-- Form to input three numbers -->
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="num3">Number 3:</label>
        <input type="number" id="num3" name="num3" required><br><br>

        <input type="submit" value="Find Largest">
    </form>
    </body>
    </html>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize the input values
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];
        $num3 = (float)$_POST['num3'];

        // Using ternary operators to find the largest number
        $largest = ($num1 > $num2)
                   ? (($num1 > $num3) ? $num1 : $num3)
                   : (($num2 > $num3) ? $num2 : $num3);

        echo "<h2>The largest number is: $largest</h2>";
    }
    ?>

