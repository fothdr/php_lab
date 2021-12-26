<?php
    session_start();
    mysql_connect("localhost", "f0606542_bd", "h3t6baLp", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES utf8mb4'); // тип кодировки
        // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    $login=$_POST['login'];
    $password=md5($_POST['password']);
    $result=mysql_query("SELECT userid, login, password, type FROM users WHERE login='".$login."' AND password='".$password."'");
    if (mysql_num_rows($result)>0) // если нет ошибок при выполнении запроса
        { 
            $st=mysql_fetch_array($result);
            $_SESSION['login']=$st['login'];
            $_SESSION['type']=$st['type'];
            $_SESSION['userid']=$st['userid'];
            header('Location: index.php');

         }
        else { 
            $_SESSION['msg']="Ошибка, неверный логин или пароль!";
            header('Location: auth.php');
        }
   

?>