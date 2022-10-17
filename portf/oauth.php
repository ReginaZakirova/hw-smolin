<?php
      $login = $_POST['log'] ;
      $pass = $_POST['passw'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <p>
        <label>Логин</label>
        <input type="text" name="log" placeholder="Введите логин">
       </p> 
       <p>
        <label>Пароль</label>
        <input type="password" name="passw"  placeholder="Введите пароль">
       </p>
       <p>
       <button type="submit" name="button_id">Send!</button>
       </p>
       <p>
        <?php
           if (count($_POST)> 0){
            if ($login == 'Danil' && md5($_POST["passw"]) == '202cb962ac59075b964b07152d234b70'){
                echo 'Добро пожаловать';
           } else echo 'Данные не верны';
        }else echo 'Введите данные';         
        ?>
       </p>
       <div class="links">
       <a href="bitrix.php">Страница битрикс</a>
       <a href="fact.php">Страница факт</a>
       </div> 
       
       <?php
         session_start();
         if (isset($_SESSION['history'])) {
             echo 'Вы пришли с '.end($_SESSION['history']);
         }
         $_SESSION['history'][] = $_SERVER['HTTP_REFERER'];
        ?>
       
    </form>
</body>
</html>