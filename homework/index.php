<?php

echo 'Задание 19-2';
echo "<br>";


for ($i=1; $i<=50; $i++){
   
    
    if (($i % 3) == 0 ){
        echo "<i>$i</i>";
    } elseif (($i % 3 && $i % 5) == 0 ){
        echo "<b>$i</b>";
    } else echo $i;
  
   
}
echo "<br>";

