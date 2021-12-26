
<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['type']!="2") {
    $_SESSION['msg']="Требуется авторизация или нет прав доступа!";
    header('Location: auth.php');
  }
    mysql_connect("localhost", "f0606542_bd", "h3t6baLp", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES utf8mb4'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    $zapros="DELETE FROM users WHERE userid=". $_GET['userid'];
    mysql_query($zapros);
    header("Location: admin_users.php");
    exit;
?>