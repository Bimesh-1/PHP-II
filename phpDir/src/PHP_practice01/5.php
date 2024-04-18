<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
echo "prebuilt function1:  ".floor(5.6847382);
echo "<br>";
echo "uppercase: ".strtoupper("i am learning full stack");
echo "<br>";
echo "reverse number: ".var_dump(array_reverse([1, 2, 3, 4, 5]));

	
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>