<?php
//realizar a média simples entre dois números. Saída com 4 casas decimais
//Primeira entrada --> peso = 3.5
//Segunda entrada --> peso = 7.5
$handle = fopen ("php://stdin","r");
$A = fgets($handle);
$B = fgets($handle);
$M = (($A*3.5)+($B*7.5))/11;
$M = number_format($M, 5, '.', '');
echo "MEDIA = $M\n";
?>