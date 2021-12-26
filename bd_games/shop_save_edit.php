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
    $zapros="UPDATE digital_shop SET name='".$_GET['name'].
    "', url='".$_GET['url']."' WHERE id="
    .$_GET['id'];
    mysql_query($zapros);

    if (mysql_affected_rows()>0) {
    echo 'Все сохранено. <a href="index.php"> Вернуться к списку
    магазинов </a>'; }
    else { echo 'Ошибка сохранения. <a href="index.php">
    Вернуться к списку магазинов</a> '; }
?>
</div>
</body>
</html>