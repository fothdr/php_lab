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
    $rows=mysql_query("SELECT id, name, genre,
    dev, publ, sales FROM games WHERE
    id=".$_GET['id']);
    while ($st = mysql_fetch_array($rows)) {
    $id=$_GET['id'];
    $name = $st['name'];
    $genre = $st['genre'];
    $dev = $st['dev'];
    $publ = $st['publ'];
    $sales = $st['sales'];
    }
    print "<form action='save_edit.php' metod='get'>";
    print "Название: <input name='name' size='50' type='text'
    value='".$name."' required>";
    print "<br>Жанр: <input name='genre' size='20' type='text'
    value='".$genre."' required>";
    print "<br>Разработчик: <input name='dev' size='20' type='text'
    value='".$dev."' required>";
    print "<br>Издатель: <input name='publ' size='30' type='text'
    value='".$publ."' required>";
    print "<br>Объем продаж: <input name='sales' size='30' type='text'
    value='".$sales."' required>";
    print "<input type='hidden' name='id' value='".$id."'> <br>";
    print "<input type='submit' name='' value='Сохранить'>";
    print "</form>";
    print "<p><a href=\"index.php\"> Вернуться к списку
    игр </a>";
    ?>
</div>
</body>
</html>