<?php
/* 
    Write your code here
     */
    $candy = array("toffee"=>2.99, "mint"=>1.99, "fudge"=>3.49);
?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <?php
    /* 
    Write your code here
     */
    foreach ($candy as $cand => $value) {
      echo "<tr><td>$cand</td><td>€$value</td></tr>";
    }
    ?>
  </table>
</body>

</html>