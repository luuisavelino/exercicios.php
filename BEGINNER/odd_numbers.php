<?php
//Mostre todos os numeros impares até o numero de entrada
$handle = fopen ("php://stdin","r");
$entrada = intval(fgets($handle));
$i=1;
while ($i<=$entrada){
    echo "$i\n";
    $i += 2;
}
?>