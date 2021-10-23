<?php
//1 - Product's code
//2 - Number of units
//3 - Price per unit 
//Output: The value to pay with 2 digits after the point

//$handle = fopen("php://stdin","r");
$i = 0;
$valor = 0;


while($i<2){
    $entrada = explode(" ", fgets(STDIN));
    $A = $entrada[0];
    $B = $entrada[1];
    $C = $entrada[2];
    $valor += ($B*$C);
    $i ++;
}

$valor = number_format($valor,2,'.','');
echo "VALOR A PAGAR: R$ $valor\n";
?>