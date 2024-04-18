<?php

/* 
  Write you php code here

   */
  $order = 30;
  $quantity = 50;
  $comparision = $order <= $quantity;
  /* $result;
   if ($comparision==true) {
    $result=1;
   } else {
    $result=0;
   }; */
   
?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>The order is <?php echo $comparision; ?></p>

</body>

</html>