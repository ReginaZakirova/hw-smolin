<?php
$row = 5;
$column = 6;
$res = 1;
for ($i = 0; $i < $row; $i++) {
    for ($j = 1; $j < $column + 1; $j++) {
        $arr[$j][$i+1] = mt_rand(0, 9);
        echo $arr[$j][$i+1] . ' ';
    }
    echo '<br>';   
}

foreach($arr as $key => $value ) {
    if($key % 2 == 0) {
        $max = 0;
        foreach ($value as $item){
            if($item > $max){
                $max = $item;
            } 
            
        }
        echo 'максимальное значение ' . $key .' столбца' . " - $max;" . '<br>';
        $res = $res*$max;
    } 

}