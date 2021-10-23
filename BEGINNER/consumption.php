<?php
//Mostre o consumo médio de combustível por Km
//1 - distancia
//2 - combustivel
$handle = fopen ("php://stdin","r");
$X = fgets($handle);
$Y = fgets($handle);

$consum = $X/$Y;
$consum = number_format($consum,3,'.','');
echo "$consum km/l\n";
?>