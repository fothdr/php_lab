<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['type']!="2") {
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
    <title>Создание пользователя - Никитин</title>
</head>
<body>
<div style="max-width: 600px; margin: 0 auto;">
<?php
    mysql_connect("localhost", "f0606542_bd", "h3t6baLp", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES utf8mb4'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    $password=md5($_POST['password']);
    $sql_add = "INSERT INTO users SET login='".$_POST['login']
    ."', password='".$password."', type='". $_POST['type']."'";
    mysql_query($sql_add); // Выполнение запроса
    if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
    { print "<p>Спасибо, вы создали нового пользователя.";
    print "<p><a href=\"admin_users.php\"> Вернуться к к списку пользователей </a>"; }
    else { print "Ошибка сохранения. Введите корректные данные или измените логин. <a href=\"admin_users.php\">
    Вернуться к списку пользователей </a>"; }
?>
</div>
</body>
</html>