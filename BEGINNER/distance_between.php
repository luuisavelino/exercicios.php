<?php
//Calculate and print the distance value.

$entrada1 = explode(" ", fgets(STDIN));
$X1 = floatval($entrada1[0]);
$Y1 = floatval($entrada1[1]);
$entrada2 = explode(" ", fgets(STDIN));
$X2 = floatval($entrada2[0]);
$Y2 = floatval($entrada2[1]);

$distance = sqrt((($X2-$X1)**2)+(($Y2-$Y1)**2));
$distance = number_format($distance,4,'.','');
echo "$distance\n"

?>