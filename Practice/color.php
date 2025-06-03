<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Background</title>
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

    switch($n) {
        case "sunday": echo "<body bgcolor='yellow'>"; break;
        case "monday": echo "<body bgcolor='pink'>"; break;
        case "tuesday": echo "<body bgcolor='blue'>"; break;
        case "wednesday": echo "<body bgcolor='green'>"; break;
        case "thursday": echo "<body bgcolor='cyan'>"; break;
        case "friday": echo "<body bgcolor='black'>"; break;
        case "saturday": echo "<body bgcolor='orange'>"; break;
        default: echo "Invalid Choice...";
    }

?>
