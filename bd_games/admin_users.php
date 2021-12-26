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
    <title>Список пользователей - Никитин</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container" style="margin: 0 auto;">
<div style="display: flex; justify-content: center;">
<a href="admin_users.php" style="margin: 5px;" class="btn btn-outline-dark">Список пользователей</a>
</div>
<a href="index.php" style="text-decoration:none;"><span style="margin-top: 10px; margin-bottom: 0px;">Назад к спискам</span></a>
<?php
    mysql_connect("localhost", "f0606542_bd", "h3t6baLp", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES UTF-8'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    
?>
    <h2>Список пользователей</h2>
    <table border="1" class="table table-bordered" style=" font-size: 14px; padding: 0; margin: 0;">
    <tr> 
    <th> ID </th> <th> Логин </th> <th> Тип </th> 
    <th> Редактировать </th> <th> Удалить </th> </tr>
    <?php
    $result=mysql_query("SELECT * FROM users"); // запрос на выборку сведений о пользователях
    while ($row=mysql_fetch_array($result)){// для каждой строки из запроса
    echo "<tr>";
    echo "<td>" . $row['userid'] . "</td>";
    echo "<td>" . $row['login'] . "</td>";
    if ($row['type'] == 1) {
        echo "<td>Оператор</td>";
    } else {
        echo "<td>Администратор</td>";
    }
    
    echo "<td><a href='admin_edit.php?userid=" . $row['userid']
    . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
    echo "<td><a href='admin_delete.php?userid=" . $row['userid']
    . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
    echo "</tr>";
    }
    print "</table>";
    ?>
    <br>
<button onclick='openForm()' class="btn btn-outline-secondary">Создать нового пользователя</button>
<div class="form-wrap" id="form1">
  <form role="form" action="admin_new.php" autocomplete="off" method="POST">
    <h3>Создание нового пользователя</h3>
    <p>Логин</p>
    <input name="login" size="20" type="text" required>
    <p>Пароль</p>
    <input name="password" size="20" type="text" required>
    <p>Тип</p>
    <p>
    <select name="type" required>
        <option value="1">Оператор</option>
        <option value="2">Администратор</option>
    </select>
</p>
    <br> <br>
    <button type="submit" class="btn btn-primary">Создать нового пользователя</button>
  </form>
  <br>
  <button onclick='closeForm()' class="btn btn-outline-danger">Скрыть форму создания пользователя</button>
</div>
</div>
</div>
<style>

.form-wrap {
  display: none;
  opacity: 0;
  transition: opacity .5s;
}
.open {
  display: block;
  transition: opacity .5s;
  opacity: 1;
}


    </style>
    <script>
const formWrap = document.getElementById('form1');

function openForm() {
    formWrap.classList.add('open');
}
function closeForm() {
    formWrap.classList.remove('open');
} </script>
</body>
</html>