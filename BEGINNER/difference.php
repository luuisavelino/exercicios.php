<?php

$handle = fopen("php://stdin","r");
$A = fgets($handle);
$B = fgets($handle);
$C = fgets($handle);
$D = fgets($handle);

$dif = (($A * $B)-( $C * $D));
echo "DIFERENCA = $dif\n";
?>