<?php
//Calculate area from differents forms
$PI = 3.14159;

$entrada = explode(" ", fgets(STDIN));

$A = floatval($entrada[0]);
$B = floatval($entrada[1]);
$C = floatval($entrada[2]);

$triangulo = $A*$C/2;
$triangulo = number_format($triangulo, 3,'.','');

$circulo = $PI*($C**2);
$circulo = number_format($circulo, 3,'.','');

$trapezio = (($A+$B)*$C)/2;
$trapezio = number_format($trapezio, 3,'.','');

$quadrado = $B**2;
$quadrado = number_format($quadrado, 3,'.','');

$retangulo = $A*$B;
$retangulo = number_format($retangulo, 3,'.','');

echo "TRIANGULO: $triangulo\n";
echo "CIRCULO: $circulo\n";
echo "TRAPEZIO: $trapezio\n";
echo "QUADRADO: $quadrado\n";
echo "RETANGULO: $retangulo\n";
?>