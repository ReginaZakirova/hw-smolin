<?session_start();
if (!empty($_POST['exit']) ) {
    session_destroy(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/adaptive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <title>Document</title>
</head>

<body style="background-color: <?=changeBack($_SESSION["Background"])?>">
    <?php

    function schetdat(){
        $now = time();
        $my_date = strtotime("1999-08-24");
        $datediff = $now - $my_date;
      return  $res = round($datediff / (60 * 60 * 24));       
    }
    function colorRand(){
        $array = Array('red', 'green', 'blue');
        $rand = array_rand($array);
        echo $str = ("<p style=\"color:$array[$rand];\">Возраст: 23 года</p>");
    }
    function changeColor($string){
        $arr = explode(' ',$string);
        $i=0;
        foreach ($arr as $value){
            if($i%2==0){
             $str2 = $str2."<span class='green'>".$arr[$i]."</span> ";
             }else $str2 = $str2."<span class='blue'>".$arr[$i]."</span> ";          
             $i++;
        }
      echo $str2; 
    }
    
    $_SESSION['Background'] = $_POST['colorback'];
    
    function changeBack($color){
        if($color=='pink'){
            echo "#ff7dda";
        }elseif($color=='orange'){
            echo  "#ffd640";
        }elseif($color=='yellow'){
            echo  "#efff40";
        }
    }
    
    ?>
 <header class="header">
    <div class="wrapper">
        <div class="content__header">
            <div class="logo">
              <img class="logo__image" src="./img/logo.svg"/>
            </div>
            <div class="logo__title">
                БИОГРАФИЯ
            </div>
            <nav class="menu">
                <ul class="list">
                    <li class="list__item">
                        <a class="list__link list__link_disabled" href="table.html" target="_blank">Таблица</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link list__link_disabled" href="https://github.com/ReginaZakirova/hw-smolin/tree/main/homework" target="_blank">Циклы</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link list__link_disabled" href="strings.php" target="_blank">Строки</a>
                    </li>
                    <li class="list__item">
                        <a class="list__link list__link_disabled" href="https://github.com/ReginaZakirova/hw-smolin/tree/main/arrays" target="_blank">Массивы</a>
                    </li>
                    <li class="list__item">
                         <a class="list__link list" style ="<?if (!empty($_SESSION['login'])) echo 'display: none';?>" href="oauth.php" target="_blank">Авторизация</a>
                         <span class="hello" style="<?if (!empty($_SESSION['login'])) echo 'display: block'; else echo 'display: none'; ?>">Привет <?echo $_SESSION['login']?></span>
                    </li>
                    <form class='exit' style="<?if (!empty($_SESSION['login'])) echo 'display: block'; else echo 'display: none'; ?>" action="" method="post">
                        <input type="submit" name='exit' value="выход">    
                    </form>
                    <form action="" method="post">
                    <select name="colorback">
                        <option value="pink">розовый</option>
                        <option value="orange">оранжевый</option>
                        <option value="yellow">желтый</option>
                    </select>
                    <input type="submit" value="Сменить">
                    </form>
                </ul>
            </nav>
        </div>
    </div>
 </header>   

 <main class = "main">
    <div class="wrapper">
        <div class="content__main">
            <div class="hero__picture">
                <img class="me__photo" src="./img/mephoto.jpg">
            </div>
            <div class="hero__info">
                <div class="name">
                    Данил Смолин
                </div>
                <div class="info">
                    <div class="info__osebe">
                    <?php
                        colorRand();
                        ?>
                        Дата рождения: 24.08.1999 <br>
                        Текущая дата: <?php echo date ("d/m/Y"); ?> <br> 
                        <?php              
                            echo "прожито дней: " . schetdat(); 
                            "<br>";
                        ?> <br>
                        Хобби: Люблю слушать музыку <br>
                        Место работы: безработный <br>
                        Место учебы: Бакалавр Информационных систем и технологий
                 
                    </div>
                    <div class="info__likes">
                        <?php
                        $str1 = "На данном этапе все понравилось <br> Посмотрим, что будет дальше";
                        changeColor($str1);
                        ?>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="content__images">
            <div class="content__card">
                <div class="louvre__images">
                    <img class="imgs" src="./img/1.png">
                </div>
                <p class="imgs__title">Королевский дворец в лувре</p>    
            </div>
            <div class="content__card">
                <div class="louvre__images">
                    <img class="imgs" src="./img/2.png">
                </div>
                <p class="imgs__title">Картинная галлерея</p>    
            </div>
            <div class="content__card">
                <div class="louvre__images">
                    <img class="imgs" src="./img/3.png">
                </div>
                <p class="imgs__title">Колоннада Перро</p>    
            </div>
            <div class="content__card">
                <div class="louvre__images">
                    <img class="imgs" src="./img/4.png">
                </div>
                <p class="imgs__title">Мона Лиза</p>    
            </div>
        </div>
        <div class="content__images_rev">
            <div class="content__card">
                <div class="louvre__images">
                    <img class="imgsl" src="./img/5.png">
                </div>
                <p class="imgs__title">Пришествие Иисуса</p>    
            </div>
            <div class="content__card">
                <div class="louvre__images">
                    <img class="imgsl" src="./img/6.png">
                </div>
                <p class="imgs__title">Статуя</p>    
            </div>
            <div class="content__card">
                <div class="louvre__images">
                    <img class="imgsl" src="./img/7.jpeg">
                </div>
                <p class="imgs__title">Статуя</p>    
            </div>
            <div class="content__card">
                <div class="louvre__images">
                    <img class="imgsl" src="./img/8.jpeg">
                </div>
                <p class="imgs__title">Статуя</p>    
            </div>
        </div>
        
    </div>
    
  </div>
 </main>
</body>

</html>


