/*2. Constants vs. Variables: Define a global configuration constant (e.g., 
COLLEGE or CURRENCY) using the define() utility. Write a text block showing 
how it behaves differently from a standard, mutable variable instance.*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Constant
        define("COLLEGE", "ABC College");

        // Variable
        $college = "XYZ College";

        // Display values
        echo "Constant: " . COLLEGE . "<br>";
        echo "Variable: " . $college . "<br><br>";

        // Change variable
        $college = "National College";

        echo "After changing variable:<br>";
        echo "Constant: " . COLLEGE . "<br>";
        echo "Variable: " . $college;
    ?>
</body>
</html>