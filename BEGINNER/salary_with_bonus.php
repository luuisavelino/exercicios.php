<?php
//reads seller's name, fixed salary and sale's total
$handle = fopen ("php://stdin","r");
$name = fgets($handle);
$salary = fgets($handle);
$sales = fgets($handle);

$totalsalary = $salary + ($sales*0.15);
$totalsalary = number_format($totalsalary,2,'.','');
echo "TOTAL = R$ $totalsalary\n";
?>