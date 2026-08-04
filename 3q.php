3. String Processing Suite: Write a single script that processes text values using 
at least 8 native string functions, demonstrating utilities like character 
counting, pattern positioning, case transformation, slicing, and string 
replacements (e.g., strlen(), strrev(), strpos(), strtolower(), 
strtoupper(), substr(), and str_replace()).
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $text = "Welcome to PHP Programming";

        // Original String
        echo "Original String: " . $text . "<br><br>";

        // 1. strlen()
        echo "Length: " . strlen($text) . "<br>";

        // 2. strrev()
        echo "Reverse: " . strrev($text) . "<br>";

        // 3. strpos()
        echo "Position of 'PHP': " . strpos($text, "PHP") . "<br>";

        // 4. strtolower()
        echo "Lowercase: " . strtolower($text) . "<br>";

        // 5. strtoupper()
        echo "Uppercase: " . strtoupper($text) . "<br>";

        // 6. substr()
        echo "Substring: " . substr($text, 11, 3) . "<br>";

        // 7. str_replace()
        echo "Replace: " . str_replace("PHP", "Java", $text) . "<br>";

        // 8. ucwords()
        echo "Capitalize Words: " . ucwords(strtolower($text)) . "<br>";
    ?>
</body>
</html>