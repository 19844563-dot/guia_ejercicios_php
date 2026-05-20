<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $resta = $numero1 - $numero2;
echo "La suma es:". $resta;
}
?>