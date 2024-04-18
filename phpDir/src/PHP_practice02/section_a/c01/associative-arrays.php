<?php

/* 
  Write you php code here

   */
  $nutrition = array("fat"=>"24%", "sugar"=>"25%", "salt"=>"14%");

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>Fat content: <?php echo $nutrition["fat"] ?></p>
  <p>Sugar content: <?php echo $nutrition["sugar"] ?></p>
  <p>Salt content: <?php echo $nutrition["salt"] ?></p>


  

</body>

</html>