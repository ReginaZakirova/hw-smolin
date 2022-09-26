<form method="POST">
    <input type='number' name='pole1' value='Введите число от 0 до 10'> 
    <p><input type="submit" name="button_id" value="Ввод" /></p>
</form>
<?php

    if(isset( $_POST['button_id']))
    {
        $a = $_POST['pole1'];
    
    }
    
    $b = (int)$a;

    if ($b==0){
        for ($i=0; $i<10; $i++){
            
             echo $i;}
    } elseif ($b==1){
        for ($i=0; $i<9; $i++){   
           
            echo $i;
        }
    } elseif ($b==2){
        for ($i=0; $i<8; $i++){
            echo $i;
        }
    } elseif ($b==3){
        for ($i=0; $i<7; $i++){
            echo $i;
        }
    } elseif ($b==4){
        for ($i=0; $i<6; $i++){
            echo $i;
        }
    }
    elseif ($b==5){
        for ($i=0; $i<5; $i++){
            echo $i;
        }
    }
    elseif ($b==6){
        for ($i=0; $i<4; $i++){
            echo $i;
        }
    }
    elseif ($b==7){
        for ($i=0; $i<3; $i++){
            echo $i;
        }
    }
    elseif ($b==8){
        for ($i=0; $i<2; $i++){
            echo $i;
        }
    }
    elseif ($b==9){
        for ($i=0; $i<1; $i++){
            echo $i;
        }
    }
    elseif ($b==10){
        for ($i=0; $i<0; $i++){
            echo $i;
        }
    }
    
    