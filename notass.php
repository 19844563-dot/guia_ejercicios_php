<?php
    $nota1 = $_POST['numero1'];
    $nota2 = $_POST['numero2'];
    $nota3 = $_POST['numero3'];

$promedio = ($nota1 + $nota2 + $nota3) / 3;
echo "El promedio es:" . $promedio;

if ($promedio >= 6) {
   echo "aprobado";
} else {
    echo "reprobado";
}

?>