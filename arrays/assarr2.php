<?php
$month = [
    'Январь' => ['Куба' => 24 , 'Тринидад' => 3, 'Ямайка' => 25, 'Гаити' => 25],
    'Февраль' => ['Куба' => 22 , 'Тринидад' => 4, 'Ямайка' => 35, 'Гаити' => 23],
    'Март' => ['Куба' => 31 , 'Тринидад' => 5, 'Ямайка' => 29, 'Гаити' => 24],
    'Апрель' => ['Куба' => 23 , 'Тринидад' => 6, 'Ямайка' => 23, 'Гаити' => 26],
    'Май' => ['Куба' => 25 , 'Тринидад' => 7, 'Ямайка' => 24, 'Гаити' => 26],
    'Июнь' => ['Куба' => 32 , 'Тринидад' => 8, 'Ямайка' => 30, 'Гаити' => 31],
    'Июль' => ['Куба' => 33 , 'Тринидад' => 9, 'Ямайка' => 31, 'Гаити' => 36],
    'Август' => ['Куба' => 34 , 'Тринидад' => 10, 'Ямайка' => 33, 'Гаити' => 34],
    'Сентябрь' => ['Куба' => 21 , 'Тринидад' => 5, 'Ямайка' => 24, 'Гаити' => 20],
    'Октябрь' => ['Куба' => 23 , 'Тринидад' => 6, 'Ямайка' => 22, 'Гаити' => 18],
    'Ноябрь' => ['Куба' => 21 , 'Тринидад' => 8, 'Ямайка' => 21, 'Гаити' => 17],
    'Декабрь' => ['Куба' => 20 , 'Тринидад' => 9, 'Ямайка' => 10, 'Гаити' => 20]
];

echo "<pre>";
print_r($month);
echo "</pre>";




foreach ($month as $key=>$value){
    $max = 0;
    foreach ($value as $item_key=>$item){
      if ($item > $max){
        $max = $item;
      }       
    }
   
    $newarr[$key] = $max; 
   
} 
    


echo "<pre>";
print_r($newarr);
echo "</pre>";    

