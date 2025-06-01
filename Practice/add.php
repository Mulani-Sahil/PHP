<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter No.1:
        <input type="text" name="t1"><br>
        Enter No.2:
        <input type="text" name="t2"><br>
        <input type="submit" value="ok">
    </form>
</body>
</html>

<?php
	$a=$_POST["t1"];
	$b=$_POST["t2"];
	$c=$a+$b;
	printf("<br>Addition of %d and %d = %d",$a,$b,$c);
?>