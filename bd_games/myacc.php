<?php
session_start();
if (!isset($_SESSION['login'])) {
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
    <title>Никитин</title>
</head>
<body>
<div class="info" style="max-width: 600px; margin: 0 auto;">
<?php
    mysql_connect("localhost", "f0606542_bd", "h3t6baLp", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES utf8mb4'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    $sql="SELECT * FROM users WHERE userid=".$_SESSION['userid'];
    $rows=mysql_query($sql);
    while ($st = mysql_fetch_array($rows)) {
    $userid=$_SESSION['userid'];
    $login = $st['login'];
    $type = $st['type'];
    } ?>
  
    <form role="form" action="myacc_save.php" autocomplete="off" method="POST">
    <h3>Изменение данных пользователя</h3>
    <p>Логин</p>
    <input name="login" size="20" type="text" value="<?php echo $login; ?>" required>
    <p>Пароль</p>
    <input name="password" size="20" type="text" value="Password is hidden" required>
    <input name="userid" size="20" type="hidden" value="<?php echo $userid; ?>">
    <p>Тип аккаунта(за изменением к администратору): <?php if ($type=="1") {
        echo " Оператор";
    } else {
        echo "Администратор";
    }?></p>
    <br> <br>
    <button type="submit" class="btn btn-primary">Сохранить</button>
  </form>
  <br>
  <a href="index.php"> Вернуться к спискам </a>
</div>
</body>
</html>