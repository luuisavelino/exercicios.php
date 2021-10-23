<?php
//If and Else tests
$entrada = explode(" ", fgets(STDIN));

$A = floatval($entrada[0]);
$B = floatval($entrada[1]);
$C = floatval($entrada[2]);
$D = floatval($entrada[3]);

if ($D > $A && $B > $C){
    $sumAB = $A + $B;
    $sumCD = $C + $D;
    if($sumCD > $sumAB){
        if($C>0 && $D>0){
            if(($A%2)==0){
                echo "Valores aceitos\n";
            }
            else echo "Valores nao aceitos\n";

        }
        else echo "Valores nao aceitos\n";

    }
    else echo "Valores nao aceitos\n";
    
}
else{
    echo "Valores nao aceitos\n";
}


?>