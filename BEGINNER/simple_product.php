<?php
//Realizar o produto entre duas entradas
$handle = fopen ("php://stdin","r");
$A = fgets($handle);
$B = fgets($handle);
$X = $A * $B;
echo "PROD = $X\n";
?>