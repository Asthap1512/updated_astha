<!---Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
o 34 --->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <h1>Fibonacci Series</h1>
    </body>
    </html>

    <?php
    // Number of terms in the Fibonacci series
    $numTerms = 10; // This can be adjusted to print more terms

    // Initialize the first two terms
    $a = 0;
    $b = 1;

    // Display the first two terms
    echo "<p>$a, $b";

    // Calculate and display the remaining terms
    for ($i = 2; $i < $numTerms; $i++) {
        $c = $a + $b;
        echo ", $c";
        // Update the terms
        $a = $b;
        $b = $c;
    }

    echo "</p>";
    ?>
