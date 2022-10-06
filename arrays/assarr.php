<?php
$students = [
    'Муртазин' => ['Математика' => 3 , 'Физика' => 3, 'Химия' => 5, 'Информатика' => 4],
    'Смолин' => ['Математика' => 4 , 'Физика' => 4, 'Химия' => 4, 'Информатика' => 5],
    'Косяков' => ['Математика' => 5 , 'Физика' => 5, 'Химия' => 5, 'Информатика' => 5]
];

echo "<pre>";
print_r($students);
echo "</pre>";

foreach ($students as $key=>$value){
    foreach ($value as $item_key=>$item){
        if ($item_key=='Математика'){
            $mat = $mat + $item;           
        } 
        if ($item_key=='Физика'){
            $fiz = $fiz +$item;
        } 
        if ($item_key=='Химия'){
            $him = $him +$item;
        }
        if ($item_key=='Информатика'){
            $inf = $inf +$item;
        }      
    }
}
echo $mat . " - Сумма по математике" . "<br>";
echo $sredmat = $mat/3 . " - Средняя по математике" . "<br>";
echo $fiz . " - Сумма по физике" . "<br>";
echo $sredfiz = $fiz/3 . " - Средняя по физике" . "<br>";
echo $him . " - Сумма по химии" . "<br>";
echo $sredhim = $him/3 . " - Средняя по химии" . "<br>";
echo $inf . " - Сумма по информатике" . "<br>";
echo $sredinf = $inf/3 . " - Средняя по информатике" . "<br>";