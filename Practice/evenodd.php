<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and Odd</title>
</head>
<body bgcolor="yellow">
    <form method="post">
        Enter No.1:
        <input type="text" name="t1"><br>
        <input type="submit" value="ok">
    </form>
</body>
</html>

<?php

    $n = $_POST["t1"];

    if($n%2==0)
     printf("The number is Even");
    else
     printf("The number is Odd");

?>
