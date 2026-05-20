<?php
    $descuento = $_POST["descuento"];
    $precio = $_POST["precio"];

    $preciofinal = $precio - ($precio * ($descuento / 10));

    echo "<h2>El precio final con el descuento aplicado es: $preciofinal</h2>";

?>