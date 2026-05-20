<?php
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
            
if ($numero1 < $numero2) {
                
echo "El primer número (<strong>$numero1</strong>) es menor que el segundo (<strong>$numero2</strong>).";
 } 
elseif ($numero2 < $numero1) {
                
echo "El segundo número (<strong>$numero2</strong>) es menor que el primero (<strong>$numero1</strong>).";
} 

?>