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

$emprestimoSegundo = 0;
$emprestimoMinuto = 0;
$emprestimoHora = 0;



$segundos = $S2 - $S1;
if($segundos<0){
    $segundos = 60 + $S2 - $S1;
    $emprestimoSegundo += 1;
}

$minutos = ($M2-$emprestimoSegundo) - $M1;
if($minutos<0){
    $minutos = 60 + ($M2-$emprestimoSegundo) - $M1;
    $emprestimoMinuto += 1;
}

$horas = ($H2-$emprestimoMinuto) - $H1;
if($horas<0){
    $horas = 24 + ($H2-$emprestimoMinuto) - $H1;
    $emprestimoHora += 1;
}
$dias = ($D2-$emprestimoHora) - $D1;


echo "$dias dia(s)\n";
echo "$horas hora(s)\n";
echo "$minutos minuto(s)\n";
echo "$segundos segundo(s)\n";


?>