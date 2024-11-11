<!--• Write a program for this Pattern:
*****
*
*
*
***** -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern</title>
    <style>
        pre {
            font-family: monospace;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Pattern Output</h1>
    <pre>
    
    <?php
        // The pattern logic
        for ($row = 1; $row <= 5; $row++) {
            if ($row == 1 || $row == 5) {
                // Print 5 stars in the first and last rows
                echo "*****\n";
            } else {
                // Print a single star in other rows
                echo "*\n";
            }
        }
    ?>
    </pre>
    </body>
    </html>