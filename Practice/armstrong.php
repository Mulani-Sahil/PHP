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
 $cnt=0;
 $n1=$n;
 $n2=$n;

 while ($n > 0) {
    $d = $n % 10;
    $cnt++;
    $n =(int)($n / 10); 
 } 

  while($n1 > 0)
  {
    $d=$n1 % 10;
    $sum=$sum + pow($d,$cnt);
    $n1=(int)($n1/10);  
  }
 if($n2 == $sum)
 {
   printf("%d is the armstrong number...",$n2);
 }
 else
 {
   printf("%d is not a armstrong number...",$n2);
 }
?>
