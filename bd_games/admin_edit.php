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
    <title>Никитин</title>
</head>
<body>
<div class="info" style="max-width: 600px; margin: 0 auto;">
<p><?php if (isset($_GET['userid'])) { echo "ВСЕ РАБОТАЕТ!";} else {echo "НИЧЕГО НЕ РАБОТАЕТ!";}?></p>
<?php
    mysql_connect("localhost", "f0606542_bd", "h3t6baLp", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES utf8mb4'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    $sql="SELECT * FROM users WHERE userid=".$_GET['userid'];
    $rows=mysql_query($sql);
    while ($st = mysql_fetch_array($rows)) {
    $userid=$_GET['userid'];
    $login = $st['login'];
    $type = $st['type'];
    } ?>
  
    <form role="form" action="admin_save_edit.php" autocomplete="off" method="POST">
    <h3>Изменение данных пользователя</h3>
    <p>Логин</p>
    <input name="login" size="20" type="text" value="<?php echo $login; ?>" required>
    <p>Пароль</p>
    <input name="password" size="20" type="text" value="Password is hidden" required>
    <p>Тип</p>
    <input name="userid" size="20" type="hidden" value="<?php echo $userid; ?>">
    <p>
    <select name="type" required>
        <option value="1"<?php if ($type==1) echo " selected"; ?>>Оператор</option>
        <option value="2"<?php if ($type==2) echo " selected"; ?>>Администратор</option>
    </select>
</p>
    <br> <br>
    <button type="submit" class="btn btn-primary">Сохранить</button>
  </form>
  <br>

</div>
</body>
</html>