<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter Number: 
        <input type="text" name="t1"><br>
        <input type="submit" value="ok">
    </form>
</body>
</html>
<?php
  $n=$_POST["t1"];
  for($i=1;$i<=10;$i++)
     printf("<br>%d",$i*$n);
?>