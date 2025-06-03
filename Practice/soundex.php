
<html>
 <body>
    <form method="post">
      Enter String: 
      <input type="text" name="t1">
      <input type="submit" value="reverse">
     </form>
 </body>
</html>
<?php
 $s1=$_POST["t1"];
 $s2=strrev($s1);
 echo("Reverse String is $s2");
?>