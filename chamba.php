<?php
    $nombre = $_POST["nombre"];
    $horas = $_POST["horas"];
    $pago = $_POST["pago"];

    $salario_total = $horas * $pago;

   echo "<h2>Salario total de este empleado es: $salario_total</h2>";

   ?>
