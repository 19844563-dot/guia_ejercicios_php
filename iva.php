<?php
    $precio = $_POST["precio"];
    $producto = $_POST["producto"];
    $iva = $precio * 0.13;
    $preciototal = $precio + $iva;

    echo "<h2>El precio del producto $producto es: $precio</h2>";
    echo "<h2>El precio total con IVA incluido es: $preciototal</h2>";
    
?>