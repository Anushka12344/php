5. Alternative Control Loop Flow: Implement a script utilizing while and do while variations to scan through a collection, using break and continue
keywords to modify the loop execution paths dynamically.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // while loop
        echo "While Loop<br>";

        $i = 1;

        while ($i <= 5) {

            if ($i == 3) {
            $i++;
            continue;   // Skip number 3
        }

        echo $i . "<br>";

        if ($i == 4) {
            break;      // Stop loop at 4
        }

        $i++;
        }

        echo "<br>Do-While Loop<br>";

        $j = 1;

        do {
            echo $j . "<br>";
            $j++;
        } while ($j <= 5);
    ?>
</body>
</html>