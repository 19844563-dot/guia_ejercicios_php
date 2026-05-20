<?php
$base = $_POST['base'];
$altura = $_POST['altura'];

$area = $base * $altura;

echo "La base es: " . $base . "<br>";
echo "La altura es: " . $altura . "<br>";

echo "El área del rectángulo es: " . $area;
?>