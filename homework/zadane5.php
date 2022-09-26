<?php

echo 'Задание 21-2 - while';
echo "<br>";

$num = 1000;
while ($num > 50){
    $num = $num/2;
    $i++;
}
echo $num . ' ' . '- Полученное число';
echo "<br>";
echo $i . ' ' . '- Количество итераций';
echo "<br>";
echo 'Задание 21-2 - for';
echo "<br>";

for ($nums=1000; $nums>50; $k++){
    $nums = $nums/2;
}

echo $num . ' ' . '- Полученное число';
echo "<br>";
echo $k . ' ' . '- Количество итераций';
echo "<br>";
