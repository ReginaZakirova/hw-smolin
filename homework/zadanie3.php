<form method="POST">
    <input type='number' name='pole1' value='Введите целое положительное число'> 
    <p><input type="submit" name="button_id" value="Ввод" /></p>
</form>
<?php

    if(isset( $_POST['button_id']))
    {
        $a = $_POST['pole1'];
    
    }
    
    $b = (int)$a;
 
    $sum = 0;
    $temp=0;
    while($b!=0)
    {
        if (!($b%2)){
            $sum = $sum + $b % 10; 
        }
        $b = $b / 10;
  
    }
   echo $sum;
   
?>
