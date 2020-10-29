<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Danny's PHP lesson</title>
  </head>
  <body style="background-color:Black;">
    <h1 style="color:White;">BUIDING A BASIC CALCULATOR USING PHP</h1></hr>
    <div style="color:White;"><h3>ADDITION ONLY</h3>
      <form action="Site.php" method="get">
      <input type="number" name="num1">
      <br>
      <input type="number" name="num2">
      <input type="submit">
      </form>
      Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>;
      <br><br><br><br><br><h2>ALL OPERATIONS</h2>
      <form action="Site.php" method="post">
      Enter First Number<input type="number" step="0.01" name="num1"><br>
      Operation Sign (+,-,/,x)<input type="text" name="op"><br>
      Enter Second Number<input type="number" step="0.01" name="num2"><br>
      <input type="submit">
    </form><br>
      Answer:<?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+"){ echo $num1 + $num2;}
        elseif($op == "-"){ echo $num1 - $num2;}
        elseif($op == "x"){ echo $num1 * $num2;}
        elseif($op == "/"){ echo $num1 / $num2;}
        else { echo "Invalid operator sign or No inputs";}?>
    </div>
  </body>
</html>
