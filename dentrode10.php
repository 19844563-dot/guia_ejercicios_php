<?php
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    $edaden10anios = $edad + 10;

    echo "<h2>Edad de $nombre en 10 años sera: $edaden10anios</h2>";
    
?>