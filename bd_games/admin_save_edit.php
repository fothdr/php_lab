<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['type']=="2") {
    $_SESSION['msg']="Требуется авторизация или нет прав доступа!";
    header('Location: auth.php');
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сохранение изменений пользователя - Никитин</title>
</head>
<body>
<div class="info" style="max-width: 600px; margin: 0 auto;">
<?php
    mysql_connect("localhost", "f0606542_bd", "h3t6baLp", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES utf8mb4'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    $password=md5($_POST['password']);
    $zapros="UPDATE users SET login='".$_POST['login'].
    "', password='".$password."', type='"
    .$_POST['type']."' WHERE userid="
    .$_POST['userid'];
    mysql_query($zapros);
    if (mysql_affected_rows()>0) {
    echo 'Все сохранено. <a href="admin_users.php"> Вернуться к списку
    пользователей </a>'; }
    else { echo 'Ошибка сохранения. Некорректные данные или пользователь с таким логином уже существует. <a href="admin_users.php">
    Вернуться к списку пользователей</a> '; }
?>
</div>
</body>
</html>