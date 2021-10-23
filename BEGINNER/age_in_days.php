<?php
//Read a value of age in days and convert to Years, months and days
$handle = fopen("php://stdin","r");
$N = intval(fgets($handle));

$years = 0;
if($N>=365){
    while($N>365){
        $N -= 365;
        $years++;
    }
}
$months = 0;
if($N>=30 && $N < 365){
    while($N>=30){
        $N -= 30;
        $months++;
    }
}
$days = $N;
echo "$years ano(s)\n";
echo "$months mes(es)\n";
echo "$days dia(s)\n";

?>