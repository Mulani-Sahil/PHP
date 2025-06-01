<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palindrome Number</title>
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
  $n1 = $n;
  $rno = 0;

  while ($n > 0) {
    $d = $n % 10;
    $rno = $rno * 10 + $d;
    $n = (int)($n / 10);
  }

  printf("Reverse number of %d is %d<br>", $n1, $rno);

  if ($n1 == $rno) {
    printf("%d is a palindrome number...", $n1);
  } 
 else {
    printf("%d is not a palindrome number...", $n1);
  }

?>