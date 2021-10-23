<?php
// mostre o maior
$entrada = explode(" ", fgets(STDIN));
$A = intval($entrada[0]);
$B = intval($entrada[1]);
$C = intval($entrada[2]);

$maiorAB = ($A+$B+abs($A-$B))/2;
$maiorABC = ($maiorAB+$C+abs($maiorAB-$C))/2;

echo "$maiorABC eh o maior\n"

?>