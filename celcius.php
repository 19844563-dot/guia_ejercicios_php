<?php
$celsius = $_POST['celsius'];

$fahrenheit = ($celsius * 9/5) + 32;

echo "Temperatura en Celsius: " . $celsius . " °C<br><br>";

echo "<h2>Equivale a: " . $fahrenheit . " °F</h2>";

?>
