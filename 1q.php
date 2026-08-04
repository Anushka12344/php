1. Parametric Return Functions: Define a custom PHP function named 
addNumbers() that takes two values as arguments, computes their arithmetic 
total, and returns the result to the caller.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Function Definition
        function addNumbers($num1, $num2)
        {
            $total = $num1 + $num2;
            return $total;
        }

        // Function Call
        $a = 25;
        $b = 15;

        $result = addNumbers($a, $b);

        // Display Output
        echo "First Number: " . $a . "<br>";
        echo "Second Number: " . $b . "<br>";
        echo "Total = " . $result;
    ?>
</body>
</html>