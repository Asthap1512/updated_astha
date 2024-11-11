<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Check</title>
</head>
<body>
    <h1>Check if a Number is an Armstrong Number</h1>

    <!-- Form to input a number -->
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>
    </body>
    </html>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = (int)$_POST['number'];
        $originalNumber = $number;
        $sum = 0;
        $numDigits = strlen((string)$number);

        while ($number > 0) {
            $digit = $number % 10;
            $sum += pow($digit, $numDigits);
            $number = (int)($number / 10);
        }

        if ($sum == $originalNumber) {
            echo "<p>$originalNumber is an Armstrong number.</p>";
        } else {
            echo "<p>$originalNumber is not an Armstrong number.</p>";
        }
    }
    ?>
