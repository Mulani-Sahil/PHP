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
    $n = $_POST["t1"];
    $flag=0;
    for($i=2; $i < $n;$i++){

     if($n % $i == 0)
     {
	$flag=1;
     }
    }
   if($flag==0)
   {
    printf("The Number is Prime");
   }
   else
   {
 	printf("The number is not Prime");
   }
?>