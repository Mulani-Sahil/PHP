
<html>
 <body>
    <form method="post">
      Enter Customer's Name:
      <input type="text" name="t1"><br>
      Enter Customer's Address:
      <input type="text" name="t2"><br>
      Enter Customer's Mobile Number:
      <input type="text" name="t3"><br> 
      Select Gender:        
      <input type="radio" name="r1" value="Male">Male
      <input type="radio" name="r1" value="Female">Female
      <input type="radio" name="r1" value="Other">Other<br><br>
     
      <input type="submit" value="submit">
     </form>
 </body>
</html>
<?php
 $s1=$_POST["t1"];
 $s2=$_POST["t2"];
 $s3=$_POST["t3"];
 $s4=$_POST["r1"];
echo("Customer's name: $s1<br>");
echo("Customer's Address: $s2<br>");
echo("Customer's Mobile Number: $s3<br>");
echo("Customer's Gender: $s4<br>");
?>