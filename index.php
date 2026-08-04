2. Layout Modularization: Create a clean web template layout by defining a 
parent script that pulls in separate header, content, and footer modules using 
the file inclusion tools (include, require, include_once, require_once). 
Write a short note in your lab report explaining the difference between 
include and require when a file is missing.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       include "header.php";
       require "content.php";

        include_once "footer.php";
        require_once "footer.php";   // Won't include again
    ?>
</body>
</html>