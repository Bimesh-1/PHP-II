<?php 
/*
$cookie_name = "user";
$cookie_value = "Bimesh";
$expiry = time() + (60 * 60 * 24 * 7);
setcookie($cookie_name,$cookie_value, $expiry);
*/
session_start();
  $_SESSION['greetings'] = "Welcome to the Party";

?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

  <a href="9.php?source=322443">Click Here </a>



    <?php

		/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it 

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
 /*
  if (isset($_GET['source'])) {
    echo $_GET['source'];
  }
  */

  
  
  

  

  

		?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>