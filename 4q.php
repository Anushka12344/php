4. Conditional & Iterative Statements: Write an application that uses an if else block to evaluate numeric marks (Pass/Fail matrix). Follow it with a for
loop that prints a sequential list of integers from 1 to 5.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Marks
        $marks = 45;

        // if-else statement
        if ($marks >= 40) {
            echo "Result: Pass <br><br>";
        } else {
            echo "Result: Fail <br><br>";
        }

        // for loop
        echo "Numbers from 1 to 5:<br>";

        for ($i = 1; $i <= 5; $i++) {
        echo $i . "<br>";
        }
    ?>
</body>
</html>