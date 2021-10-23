<?php

$spent = 12; //km/l
$handle = fopen("php://stdin","r");
$hour = fgets($handle);
$vel = fgets($handle);

$fuel = ($vel*$hour)/$spent;
$fuel = number_format($fuel,3,'.','');
echo "$fuel\n";
?>