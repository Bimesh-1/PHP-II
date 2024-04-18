<?php
class MeasurementConverter {
    // Convert temperature from Celsius to Fahrenheit
    public static function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    // Convert temperature from Celsius to Kelvin
    public static function celsiusToKelvin($celsius) {
        return $celsius + 273.15;
    }

    // Convert speed from kilometers per hour to meters per second
    public static function kmPerHourToMetersPerSecond($kmPerHour) {
        return $kmPerHour * 1000 / 3600;
    }

    // Convert speed from kilometers per hour to knots
    public static function kmPerHourToKnots($kmPerHour) {
        return $kmPerHour * 0.539957;
    }

    // Convert mass from kilogram to grams
    public static function kilogramToGram($kilogram) {
        return $kilogram * 1000;
    }

    // Convert mass from grams to kilograms
    public static function gramToKilogram($gram) {
        return $gram / 1000;
    }
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href = "style.css">
<head>
    <title>Measurement Converter</title>
    
</head>
<body>

<div class="converter">
    <h2>Measurement Converter</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="temperature">Temperature:</label><br>
        <input type="text" name="temperature" placeholder="Enter temperature in Celsius" required><br>

        <label for="speed">Speed:</label><br>
        <input type="text" name="speed" placeholder="Enter speed in km/h" required><br>

        <label for="mass">Mass:</label><br>
        <input type="text" name="mass" placeholder="Enter mass in kilograms" required><br>

        <input type="submit" name="convert" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["convert"])) {
        $temperature = $_POST["temperature"];
        $speed = $_POST["speed"];
        $mass = $_POST["mass"];

        // Convert temperature
        $fahrenheit = MeasurementConverter::celsiusToFahrenheit($temperature);
        $kelvin = MeasurementConverter::celsiusToKelvin($temperature);

        // Convert speed
        $metersPerSecond = MeasurementConverter::kmPerHourToMetersPerSecond($speed);
        $knots = MeasurementConverter::kmPerHourToKnots($speed);

        // Convert mass
        $grams = MeasurementConverter::kilogramToGram($mass);
        $kilograms = MeasurementConverter::gramToKilogram($mass);

        // Display results
        echo "<h3>Results:</h3>";
        echo "Temperature: $temperature Celsius<br>";
        echo "Temperature: $fahrenheit Fahrenheit<br>";
        echo "Temperature: $kelvin Kelvin<br>";
        echo "Speed: $speed km/h<br>";
        echo "Speed: $metersPerSecond m/s<br>";
        echo "Speed: $knots knots<br>";
        echo "Mass: $mass kilograms<br>";
        echo "Mass: $grams grams<br>";
        echo "Mass: $kilograms kilograms<br>";
    }
    ?>
</div>

</body>
</html>
