
<html>
 <body>
    <form method="post">
      Enter No.1:
      <input type="text" name="t1"><br>
      Enter No.2:
      <input type="text" name="t2"><br>       
      <input type="radio" name="r1" value="add">Addition<br>
      <input type="radio" name="r1" value="sub">subtration<br>
      <input type="radio" name="r1" value="mul">multiplication<br>
      <input type="radio" name="r1" value="div">division<br>
      <input type="submit" value="Calculate">
     </form>
 </body>
</html>
<?php
 $s1=$_POST["t1"];
 $s2=$_POST["t2"];
 $ch=$_POST["r1"];
 if($ch=="add")
   $ch=$s1+$s2;
 if($ch=="sub")
   $ch=$s1-$s2;
 if($ch=="mul")
   $ch=$s1*$s2;
 if($ch=="div")
   $ch=$s1/$s2;

echo("Result is $ch");
?>