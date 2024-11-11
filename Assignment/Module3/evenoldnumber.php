<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd without Condition</title>
</head>
<body>
    <h1>Check Even or Odd</h1>
    <?php
        $number = 7; // You can change this number
        $number = 4;
        // Array that stores "Even" at index 0 and "Odd" at index 1
        $result = ['Odd'];
        $result =['Even'];
        // Using modulus to determine the index (0 for even, 1 for odd)
        echo "The number $number is " . $result[$number % 2];
        echo "\n";
        echo "The number $number is " . $result[$number % 2];

    ?>
</body>
</html>