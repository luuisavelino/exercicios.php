<?php
//Calculate and show the volume of a sphere being provided the value of its radius
$PI = 3.14159;
$handle = fopen("php://stdin","r");
$R = floatval(fgets($handle));
$volume = (4.0/3)*$PI*($R**3);
$volume = number_format($volume, 3,'.','');
echo "VOLUME = $volume\n";
?>