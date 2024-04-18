<?php
/* Write your code here */
$day = "Tuesday";



/* switch ($day) {
  case "Monday":
    echo "20% off chocolates";
    break;
  case "Tuesday":
    echo "20% off Mint";
    break;
  default:
    echo "Buy three get one for free";
} */

?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p>The offer today is <?php
  /* Write your code here */
  switch ($day) {
    case "Monday":
      echo "20% off chocolates";
      break;
    case "Tuesday":
      echo "20% off Mint";
      break;
    default:
      echo "Buy three get one for free";
  }
  ?> </p>
</body>

</html>