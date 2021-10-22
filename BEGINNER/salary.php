<?php
//reads an employee's number, worked hours number and amount he received per hour
$handle = fopen ("php://stdin","r");
$number = fgets($handle);
$hours = fgets($handle);
$received = fgets($handle);

$salary = $hours*$received;
$salary = number_format($salary,2,'.','');

echo "NUMBER = $number";
echo "SALARY = U$ $salary\n";
?>