<?php
//Realizar a media entre 3 valores
//peso A = 2
//peso B = 3
//peso C = 5
$handle = fopen ("php://stdin","r");
$A = fgets($handle);
$B = fgets($handle);
$C = fgets($handle);

$M = (($A*2)+($B*3)+($C*5))/10;
$M = number_format($M,1,'.','');

echo "MEDIA = $M\n";

?>


