<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">


    <?php

		/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/
  class Dog {
    public $eye_color;
    public $nose;
    public $fur_color;

    function ShowAll() {
        echo "Eye Color: " . $this->eye_color . "<br>";
        echo "Nose: " . $this->nose . "<br>";
        echo "Fur Color: " . $this->fur_color;
    }
}

$pitbull = new Dog();
$pitbull->eye_color = "Brown";
$pitbull->nose = "Black";
$pitbull->fur_color = "Brown and White";
$pitbull->ShowAll();
  /*
  public function __construct($eyeColor, $nose, $furColor)
{
  $this->eye_color = $eye_color;
  $this->nose = $nose;
  $this->fur_color = $fur_color;
}

public function ShowAll()
{
  echo "Eye Color: $this->eye_color, Nose: $this->nose, Fur Color: $this->fur_color";
}

*/
  

		?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>