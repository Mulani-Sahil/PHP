<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and Odd</title>
</head>
<body>
    <form method="post">
        Enter No.1:
        <input type="text" name="t1"><br>
        <input type="submit" value="ok">
    </form>
</body>
</html>

<?php

    $n = $_POST["t1"];

    if (is_numeric($n)) {
            if ($n % 4 == 0) {
                echo "<body style='background-color:green;'>It's a Leap Year</body>";
            } else {
                echo "<body style='background-color:red;'>It's not a Leap Year</body>";
            }
        } else {
            echo "Please enter a valid number.";
        }

?>
