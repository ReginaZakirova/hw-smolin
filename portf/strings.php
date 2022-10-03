<?php
echo "Задание 19-1";
echo "<br>";

$s = "fact";
echo str_replace("f","F",$s);

echo "<br>";
echo "Задание 19-2";
echo "<br>";

$st = "Смолин, Данил, Евгеньевич";
$arr = explode(',', $st);
echo $arr[0] . ' ' . $arr[1];

echo "<br>";
echo "Задание 19-3";
echo "<br>";

$str = "Привет, мИр";
$str2 = mb_strtolower($str);
echo mb_substr_count($str2, 'и');

echo "<br>";
echo "Задание 19-4";
echo "<br>";

$stri = "html css php";
$arr1 = explode(' ', $stri);
foreach ($arr1 as $elem){
    echo $elem . "<br>";
}

echo "<br>";
echo "Задание 19-5";
echo "<br>";

$stri = "что-то.png";
if (strpos($stri, '.png') !== false){
    echo 'Да';
} else echo 'Нет';



