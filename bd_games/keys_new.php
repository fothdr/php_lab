<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Никитин</title>
</head>
<body>
<div class="info" style="max-width: 600px; margin: 0 auto;">
<?php
    mysql_connect("localhost", "f0606542_bd", "WYEBqFkb", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES utf8mb4'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    $sql_add = "INSERT INTO digital_key (id, startd, endd, gameid, shopid, price, gamekey) VALUES (NULL, '".$_GET['startd']
    ."', '".$_GET['endd']."', '".$_GET['gameid']."', '".$_GET['shopid']."', '".$_GET['price']."', '".$_GET['gamekey']."')";
    mysql_query($sql_add); // Выполнение запроса
    if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
    { print "<p>Спасибо, вы добавили новый ключ.";
    print "<p><a href=\"index.php\"> Вернуться к списку
    цифровых ключей </a>"; }
    else { print "Ошибка сохранения. <a href=\"index.php\">
    Вернуться к списку цифровых ключей </a>"; }
?>
</div>
</body>
</html>