<?php
    mysql_connect("localhost", "f0606542_bd", "WYEBqFkb", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES utf8mb4'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    $zapros="DELETE FROM games WHERE id=" . $_GET['id'];
    mysql_query($zapros);
    header("Location: index.php");
    exit;
?>