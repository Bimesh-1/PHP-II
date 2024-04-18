<?php

/* 
  Write you php code here

   */
  $best_sellers = array("chocolate"=>"10", "mint"=>"7", "fudge"=>"9", "toffee"=>"67", "jelly"=>"76", "beans"=>"23");

?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <p>Three best selling candies are: <?php echo arsort($best_sellers) ?></p>

</body>

</html>