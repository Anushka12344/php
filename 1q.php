/*1. Primitives & Math Operations: Write a script that declares variables for 
tracking numeric primitives (e.g., product counts, prices). Calculate their 
arithmetic sum and product, and display the results cleanly.<br>*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Declare numeric variables
        $productCount = 10;
        $price = 250;
        $discount = 50;

        // Calculate sum and product
        $sum = $productCount + $price + $discount;
        $product = $productCount * $price * $discount;

        // Display results
        echo "<strong>Arithmetic Sum = </strong>" . $sum . "<br>";
        echo "<strong>Arithmetic Product = </strong>" . $product;
    ?>
</body>
</html>