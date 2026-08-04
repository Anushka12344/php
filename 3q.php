3. Operator Matrix Evaluation: Create a program that demonstrates the 
practical use of multiple operator categories: Arithmetic (+, -, *, /, %), 
Assignment (+=, -=), Logical combinations (&&, ||, !), and Pre/Post 
Increment structures ($i++, ++$i).
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 5;

        // Arithmetic Operators
        echo "Arithmetic Operators <br>";
        echo "Addition = " . ($a + $b) . "<br>";
        echo "Subtraction = " . ($a - $b) . "<br>";
        echo "Multiplication = " . ($a * $b) . "<br>";
        echo "Division = " . ($a / $b) . "<br>";
        echo "Modulus = " . ($a % $b) . "<br><br>";

        // Assignment Operators
        echo "Assignment Operators <br>";
        $a += 5;
        echo "After += : " . $a . "<br>";

        $a -= 3;
        echo "After -= : " . $a . "<br><br>";

        // Logical Operators
        $x = true;
        $y = false;

        echo "Logical Operators <br>";
        echo "AND (&&): ";
        var_dump($x && $y);

        echo "<br>OR (||): ";
        var_dump($x || $y);

        echo "<br>NOT (!): ";
        var_dump(!$x);

        echo "<br><br>";

        // Increment Operators
        $i = 5;

        echo "Pre Increment (++i): " . ++$i . "<br>";
        echo "Post Increment (i++): " . $i++ . "<br>";
        echo "Value of i after Post Increment: " . $i;
    ?>
</body>
</html>