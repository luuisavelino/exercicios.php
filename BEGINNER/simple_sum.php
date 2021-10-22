<?php
//realizar a soma simples entre duas entradas
$handle = fopen ("php://stdin","r");
$A = fgets($handle);
$B = fgets($handle);
$X = $A + $B;
echo "SOMA = $X\n";
?>