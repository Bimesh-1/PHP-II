<?php

/* 
  Write you php code here

   */
  
  $candies1 = 10;
  $candies2 = 10;
  $candies3 = 10;
  $candies4 = 10;
  $sumofcandies = $candies1 + $candies2 + $candies3 + $candies4;
  $tax = 20;
  $taxamount = ($sumofcandies/100) * $tax;
  $totalprice = $sumofcandies + $taxamount;



?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  
  <h2>Shopping Cart</h2>
  <p>The total price of the candies is <?= $totalprice; ?></p>

</body>

</html>