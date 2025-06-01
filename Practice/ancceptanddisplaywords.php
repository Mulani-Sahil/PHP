<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Accept and display number in words</title>
</head>
<body>
  <form method="post">
    Enter No.1:
    <input type="text" name="t1" /><br />
    <input type="submit" value="OK" />
  </form>
</body>
</html>
<?php

    $n = $_POST["t1"];

    printf("<p>Digit words in original order:</p>");

    for ($i = 0; $i < strlen($n); $i++) {
        $d = $n[$i];

        if ($d == '0')
            printf("Zero ");
        else if ($d == '1')
            printf("One ");
        else if ($d == '2')
            printf("Two ");
        else if ($d == '3')
            printf("Three ");
        else if ($d == '4')
            printf("Four ");
        else if ($d == '5')
            printf("Five ");
        else if ($d == '6')
            printf("Six ");
        else if ($d == '7')
            printf("Seven ");
        else if ($d == '8')
            printf("Eight ");
        else if ($d == '9')
            printf("Nine ");
        else
            printf("(Invalid digit) ");
    }

?>