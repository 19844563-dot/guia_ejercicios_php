<?php
    $numero = $_POST['numero'];

    $suma = 0;
for($i = 1; $i <= $numero; $i++){

    $suma = $suma + $i;
}
echo "<h2><li>La suma de los números del 1 al $numero es: $suma</li></h2>";
   
?>
