
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Никитин А - ПИ-322</title>
</head>
<body>
    <div class="info" style="max-width: 600px; margin: 0 auto;">
    <a href="lab3.php"><h4>Назад в задачам</h3></a>
    <h2>Задача №3-4</h2>
    <p>В HTML-документе s3-4.php создайте форму с текстовым полем, в которое пользователь
вводит свой логин, и кнопкой типа Submit. Далее после нажатия копки вызывается PHP-
скрипт который проверяет, зарегистрирован ли этого пользователь. При этом таких
пользователей (разных логинов) должно быть 4 Если введен один из существующих
логинов, должно выводится приветствие для этого человека. Например, если введен
логин
Ivan_php,
должно
выводиться
Иванович». Если введен неизвестный логин, должно выводиться сообщение «Вы не
зарегистрированный пользователь!».</p>
    <p>
    <form action="s3-4.php" method="post"> 
        <p>Введите логин для проверки</p>
        <input type="text" name="log" >
    </p>
        <input type="submit" value="Выполнить">

    </form>
    <?php 
     $login= array('Ivan_php' => 'Иванов Иван Иванович', 
     'Nikitin' => 'Никитин Александр', 
     'Alexander' => 'Александр', 
     'Pi322' => 'студент группы ПИ-322');
     foreach($login as $k => $f) {
         if ($k == $_POST["log"]) {
             echo "Здравствуйте, " . $f;
         }
     }
         
?>
    </div>
</body>
</html>

