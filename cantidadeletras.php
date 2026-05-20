<?php
    $palabra = $_POST["palabra"];
    $cantidaddeletras = strlen($palabra);

    echo "<h2>La cantidad de letras en la palabra '$palabra' es: $cantidaddeletras</h2>";

?>