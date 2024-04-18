<?php

/* 
  Write you php code here

   */
$offers = [
  ["jelly bean", 10, 20],
  ["candy", 5, 34],
  ["toffee", 4, 12],
  ["paan", 25, 80],
];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <p><? foreach ($offers as $offer) {
    echo "product: " . $offer[0] . ", Quantity: " . $offer[1] . ", Price: €" . $offer[2] . "<br>";}?></p>

</body>

</html>