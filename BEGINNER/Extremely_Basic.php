<?php
//Leia 2 entradas, A e B e realize a soma entre elas e mostre a saída

$handle = fopen ("php://stdin","r");
$A = fgets($handle);
$B = fgets($handle);

$X = $A + $B;
echo "X = $X\n";

?>