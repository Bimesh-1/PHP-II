<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */
function Multiplication($x, $y) {
	$z = $x * $y;
	return $z;
}
echo'Multiplication: '.Multiplication(4, 5);
echo "<br>";

echo Multiplication(6, 7);




	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>