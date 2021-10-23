<?php

$handle = fopen("php://stdin","r");
$value = intval(fgets($handle));
echo "$value\n";
$notas100 = 0;
$notas50 = 0;
$notas20 = 0;
$notas10 = 0;
$notas05 = 0;
$notas02 = 0;
$notas01 = 0;
$i=0;
$i=strlen($value);


if ($i>=3){
    while($i>=3){
        $value -= 100;
        $notas100++;
        $i=strlen($value);
        if($value<=0)
            break;
    }
}
if ($i=2){
    while($i>=2){
        if($value >= 50){
            $value -= 50;
            $notas50++;
        }
        elseif($value >= 20 && $value < 50){
            $value -= 20;
            $notas20++;
        }
        elseif($value >= 10 && $value < 20){
            $value -= 10;
            $notas10++;
        }

        $i=strlen($value);
        if($value<=0)
            break;
    }
}
if ($i=1){
    while($i>=1){
        if($value >= 5){
            $value -= 5;
            $notas05++;
        }
        elseif($value >= 2 && $value < 5){
            $value -= 2;
            $notas02++;
        }
        elseif($value = 1){
            $value -= 1;
            $notas01++;
        }


        $i=strlen($value);
        if($value<=0)
            break;
    }
}
echo "$notas100 nota(s) de R$ 100,00\n";
echo "$notas50 nota(s) de R$ 50,00\n";
echo "$notas20 nota(s) de R$ 20,00\n";
echo "$notas10 nota(s) de R$ 10,00\n";
echo "$notas05 nota(s) de R$ 5,00\n";
echo "$notas02 nota(s) de R$ 2,00\n";
echo "$notas01 nota(s) de R$ 1,00\n";



?>