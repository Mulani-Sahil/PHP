<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Number</title>
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

 $n=$_POST["t1"];
 $sum=0;
 
 for($i=1;$i<$n;$i++)
 {
   if($n%$i==0)
   {
      $sum=$sum+$i;
   }
 }
 
 if($n==$sum)
 {
   printf("%d is the perfect number...",$n);
 }
 else
 {
   printf("%d is not a perfect number...",$n);
 }
?>
