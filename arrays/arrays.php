<?php
echo "Задание 14-4";
echo "<br>";

$n = 10;
$arr = [];

for ($i=0;$i<$n;$i++){
    $arr[$i] = mt_rand(-100,100);
    echo "$arr[$i]".' ';
}
echo "<br>";
$minp=101;
$maxo=0;
for($i=0;$i<=$n;$i++){
    if( $minp>$arr[$i] && $arr[$i]>0){
        $minp=$arr[$i];
    }
    if($maxo>$arr[$i] && $arr[$i]<0){
        $maxo=$arr[$i];
    }
}
echo $maxo . "Макс отрицательное: ";
echo "<br>";
echo $minp . "Мин положительное: ";
echo "<br>";
echo "<br>";

