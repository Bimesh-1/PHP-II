<?php
/* Write your code here */
$stock = 9;
$ordered = 20;
if ($stock > 0) {
  $message = 'In stock';
}elseif ($ordered>$stock) {
  $message = 'Coming soon....';
}else {
  $message = 'Sold out';
}



  

  

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
 <p> <?php
  /* Write your code here */
  echo $message;
  
  
  ?></p>
</body>

</html>