<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade</title>
</head>
<body>
    <form method="post">
        Enter Student Name:
        <input type="text" name="t1"><br><br>
        Enter Student Percentage:
        <input type="text" name="t2"><br><br>
        <input type="submit" value="OK"><br><br>
    </form>
</body>
</html>
<?php
   
        $name = $_POST["t1"];
        $p = $_POST["t2"];

        echo "<h3>Name of the Student: $name</h3>";
        echo "<h3>Percentage Scored: $p%</h3>";

        if ($p < 40)
            echo ("<h2>Grade: Fail</h2>");
        else if ($p < 50)
            echo ("<h2>Grade: Pass Class</h2>");
        else if ($p < 60)
            echo ("<h2>Grade: High Second Class</h2>");
        else if ($p < 70)
            echo ("<h2>Grade: First Class</h2>");
        else
            echo ("<h2>Grade: Distinction</h2>");

    ?>