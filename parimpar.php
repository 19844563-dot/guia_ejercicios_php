<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
            
if ($numero1 < $numero2) {
                
echo "El primer número (<strong>$numero2</strong>) es impar que el segundo (<strong>$numero1</strong>).";
}

elseif ($numero1 > $numero2) {
echo "El segundo número (<strong>$numero1</strong>) es par que el primer numero (<strong>$numero2</strong>).";
}

?>