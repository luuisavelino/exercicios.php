<?php
//Calcular a área do circulo com 4 casas decimais
$PI = 3.14159;
$handle = fopen ("php://stdin","r");
$R = fgets($handle);
$A = $PI * ($R**2);
$A = number_format($A, 4, '.', '');
echo "A=$A\n";
?>