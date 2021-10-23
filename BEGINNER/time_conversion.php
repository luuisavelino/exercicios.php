<?php
//Read a value in seconds and transfor to hours:minutes:seconds.
$handle = fopen("php://stdin","r");
$N = intval(fgets($handle));
$hours = 0;
if($N>=3600){
    while($N>3600){
        $N -= 3600;
        $hours++;
    }
}
$minutes = 0;
if($N>=60 && $N < 3600){
    while($N>60){
        $N -= 60;
        $minutes++;
    }
}
$secods = $N;
echo "$hours:$minutes:$secods\n";

?>