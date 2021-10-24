<?php
//Mostre a quantidade de Dias, horas, minutos e segundos da diferença entre duas datas.
//De modo que estas datas possua, dia, hora, minuto e segundo.
//A entrada é dada por:
    //Dia XXX
    //HH : MM : SS

$pegarDia1 = explode(" ", fgets(STDIN));
$D1 = $pegarDia1[1];
$D1 = intval($D1);

$primeiroDia = explode(" : ", fgets(STDIN));
$H1 = $primeiroDia[0];
$M1 = $primeiroDia[1];
$S1 = $primeiroDia[2];


$pegarDia2 = explode(" ", fgets(STDIN));
$D2 = $pegarDia2[1];
$D2 = intval($D2);

$ultimoDia = explode(" : ", fgets(STDIN));
$H2 = $ultimoDia[0];
$M2 = $ultimoDia[1];
$S2 = $ultimoDia[2];


$segundos = $S2 - $S1;
if($segundos<0)
    $segundos += 60;

$minutos = $M2 - $M1;
if($segundos>0)
    $minutos += 59;
    
$horas = $H2 - $H1;
if($minutos>0)
    $horas += 23;

$dias = $D2 - $D1;
if (($horas)>0)
        $dias -= 1;
    

echo "$dias dia(s)\n";
echo "$horas hora(s)\n";
echo "$minutos minuto(s)\n";
echo "$segundos segundo(s)\n";


?>