<?php
// Define a class Calculator
class Calculator {
    // Private properties to hold the numbers
    private $num1;
    private $num2;

    // Constructor to initialize the numbers
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // addition
    public function add() {
        return $this->num1 + $this->num2;
    }

    // subtraction
    public function subtract() {
        return $this->num1 - $this->num2;
    }

    // multiplication
    public function multiply() {
        return $this->num1 * $this->num2;
    }

    // division
    public function divide() {
        // Check for division by zero
        if ($this->num2 == 0) {
            return "Cannot divide by zero";
        } else {
            return $this->num1 / $this->num2;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href = "style.css">
<head>
    

    <title>Calculator</title>
    
</head>
<body>

<div class="calculator">
    <h2>Calculator</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="num1" placeholder="Enter first number" required><br>
        <input type="text" name="num2" placeholder="Enter second number" required><br>
        <!-- Buttons to submit different operations -->
        <input type="submit" name="add" value="Add">
        <input type="submit" name="subtract" value="Subtract">
        <input type="submit" name="multiply" value="Multiply">
        <input type="submit" name="divide" value="Divide">
    </form>

    <?php
    // Check if form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the numbers from the form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Check if both inputs are valid numbers
        if (is_numeric($num1) && is_numeric($num2)) {
            // Create an instance of the Calculator class
            $calculator = new Calculator($num1, $num2);
            // Determine which operation was selected and display the result
            if (isset($_POST["add"])) {
                echo "Result: " . $calculator->add();
            } elseif (isset($_POST["subtract"])) {
                echo "Result: " . $calculator->subtract();
            } elseif (isset($_POST["multiply"])) {
                echo "Result: " . $calculator->multiply();
            } elseif (isset($_POST["divide"])) {
                echo "Result: " . $calculator->divide();
            }
        } else {
            echo "Please enter valid numbers";
        }
    }
    ?>
</div>

</body>
</html>
