<?php
//desenvolva a formula de bhaskara
$entrada = explode(" ", fgets(STDIN));

$A = floatval($entrada[0]);
$B = floatval($entrada[1]);
$C = floatval($entrada[2]);

$delta = ($B**2) - (4*$A*$C);

if($delta>=0 && $A!=0){
    $R1 = (-$B+sqrt($delta))/(2*$A);
    $R2 = (-$B-sqrt($delta))/(2*$A);

    $R1 = number_format($R1, 5, '.', '');
    $R2 = number_format($R2, 5, '.', '');

    echo "R1 = $R1\n";
    echo "R2 = $R2\n";
}
else
    echo "Impossivel calcular\n"
?>