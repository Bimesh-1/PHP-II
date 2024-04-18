<?php
/* Write your code here */
$candy = 1;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    for ($candy = 1; $candy <= 5; $candy++) {
      echo "The cost of packs is $candy <br>";

    }
    ?>
  </p>
</body>

</html>