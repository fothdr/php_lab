<?php
session_start();
if (!isset($_SESSION['login'])) {
  $_SESSION['msg']="Требуется авторизация!";
  header('Location: auth.php');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Никитин А - ПИ-322</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container" style="margin: 0 auto;">
<h3 style="margin: 0 auto; display: flex; justify-content: center;">Здравствуйте, <?php echo $_SESSION['login']; ?></h3>
<div style="display: flex; justify-content: center;">
<?php if ($_SESSION['type']=="2"): ?>
<a href="admin_users.php" style="margin: 5px;" class="btn btn-outline-dark">Список пользователей</a>
<?php endif; ?>
<a href="myacc.php" style="margin: 5px;" class="btn btn-outline-dark">Личные данные</a>
<a href="sess_exit.php" style="margin: 5px;" class="btn btn-outline-danger">Выход</a>
</div>

<a href="/" style="text-decoration:none;"><span style="margin-top: 10px; margin-bottom: 0px;">Назад на главную страницу</span></a>
<?php
    mysql_connect("localhost", "f0606542_bd", "h3t6baLp", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES UTF-8'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    
?>
    <h2>Список игр</h2>
    <table border="1" class="table table-bordered" style=" font-size: 14px; padding: 0; margin: 0;">
    <tr> 
    <th> Название </th> <th> Жанр </th> <th> Разработчик</th> <th> Издатель</th> <th> Объем продаж</th>
    <th> Редактировать </th> <?php if ($_SESSION['type']=="2"): ?><th> Удалить </th><?php endif; ?> </tr>
    <?php
    $result=mysql_query("SELECT id, name, genre, dev, publ, sales FROM games"); // запрос на выборку сведений о пользователях
    while ($row=mysql_fetch_array($result)){// для каждой строки из запроса
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['genre'] . "</td>";
    echo "<td>" . $row['dev'] . "</td>";
    echo "<td>" . $row['publ'] . "</td>";
    echo "<td>" . $row['sales'] . "</td>";
    echo "<td><a href='edit.php?id=" . $row['id']
    . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
    if ($_SESSION['type']=="2") {
    echo "<td><a href='delete.php?id=" . $row['id']
    . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
    }
    echo "</tr>";
    }
    print "</table>";
    ?>
    <br>
<button onclick='openForm()' class="btn btn-outline-secondary">Добавить новую игру</button>
<div class="form-wrap" id="form1">
  <form role="form" action="new.php" autocomplete="off" method="GET">
    <h3>Добавление новой игры</h3>
    <p>Название игры</p>
    <input name="name" size="20" type="text" required>
    <p>Жанр игры</p>
    <input name="genre" size="20" type="text" required>
    <p>Разработчик игры</p>
    <input name="dev" size="20" type="text" required>
    <p>Издатель игры</p>
    <input name="publ" size="20" type="text" required>
    <p>Объем продаж</p>
    <input name="sales" size="20" type="text" required>
    <br> <br>
    <button type="submit" class="btn btn-primary">Добавить игру</button>
  </form>
  <br>
  <button onclick='closeForm()' class="btn btn-outline-danger">Скрыть форму добавления игры</button>
</div>
<h2>Список магазинов</h2>
    <table border="1" class="table table-bordered" style="font-size: 14px; padding: 0; margin: 0;">
    <tr> 
    <th> Название </th> <th> Ссылка </th> 
    <th> Редактировать </th> <?php if ($_SESSION['type']=="2"): ?><th> Удалить </th><?php endif; ?> </tr>
    <?php
    $result=mysql_query("SELECT * FROM digital_shop"); // запрос на выборку сведений о пользователях
    while ($row=mysql_fetch_array($result)){// для каждой строки из запроса
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['url'] . "</td>";
    echo "<td><a href='shop_edit.php?id=" . $row['id']
    . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
    if ($_SESSION['type']=="2") {
    echo "<td><a href='shop_delete.php?id=" . $row['id']
    . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
    }
    echo "</tr>";
    }
    print "</table>";
    ?>
    <br>
<button onclick='openForm2()' class="btn btn-outline-secondary">Добавить новый магазин</button>
<div class="form-wrap" id="form2">
  <form role="form" action="shop_new.php" autocomplete="off" method="GET">
    <h3>Добавление нового магазина</h3>
    <p>Название магазина</p>
    <input name="name" size="20" type="text" required>
    <p>Ссылка на магазин</p>
    <input name="url" size="20" type="text" required>
    <br> <br>
    <button type="submit" class="btn btn-primary" >Добавить магазин</button>
  </form>
  <br>
  <button onclick='closeForm2()' class="btn btn-outline-danger">Скрыть форму добавления магазина</button>
</div>
<h2>Список цифровых ключей</h2>
    <table border="1" class="table table-bordered" style="font-size: 14px; padding: 0; margin: 0;">
    <tr> 
    <th> Игра </th> <th> Магазин </th> <th> Стоимость </th> <th> Ключ </th> <th> Дата приобретения </th> <th> Дата окончания </th>
    <th> Редактировать </th> <?php if ($_SESSION['type']=="2"): ?><th> Удалить </th><?php endif; ?> </tr>
    <?php
    $result=mysql_query("SELECT digital_key.id, games.name AS gname, games.id AS gameid, digital_shop.id AS shopid, digital_shop.name AS sname, digital_key.price, digital_key.startd, digital_key.endd, digital_key.gamekey FROM digital_key INNER JOIN digital_shop ON digital_key.shopid=digital_shop.id INNER JOIN games ON digital_key.gameid=games.id"); 
    
    while ($row=mysql_fetch_array($result)){// для каждой строки из запроса
    echo "<tr>";
    echo "<td>" . $row['gname'] . "</td>";
    echo "<td>" . $row['sname'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['gamekey'] . "</td>";
    echo "<td>" . $row['startd'] . "</td>";
    echo "<td>" . $row['endd'] . "</td>";
    echo "<td><a href='keys_edit.php?id=".$row['id']
    . "&gameid=". $row['gameid'] . "&shopid=". $row['shopid'] ."'>Редактировать</a></td>"; // запуск скрипта для редактирования
    if ($_SESSION['type']=="2") {
    echo "<td><a href='keys_delete.php?id=". $row['id']
    . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
    }
    echo "</tr>";
    }
    print "</table>";
    ?>
    <br>
<button onclick='openForm3()' class="btn btn-outline-secondary">Добавить новый цифровой ключ</button>
<div class="form-wrap" id="form3">
  <form role="form" action="keys_new.php" autocomplete="off" method="GET">
    <h3>Добавление нового ключа</h3>
    <p>Игра</p>
    <p>
    <select name="gameid" required>
     <?php
      $result2=mysql_query("SELECT id, name FROM games"); 
    while ($row=mysql_fetch_array($result2)){// для каждой строки из запроса
    
    echo "<option value=". $row['id'] .">". $row['name'] ."</option>";
    }
    ?>
    </select>
    </p>
    <p>Магазин</p>
    <p>
    <select name="shopid" required>
     <?php
      $result3=mysql_query("SELECT id, name FROM digital_shop"); 
    while ($row=mysql_fetch_array($result3)){// для каждой строки из запроса
    echo "<option value=". $row['id'] .">". $row['name'] ."</option>";
    }
    ?>
    </select>
    </p>
    <p>Цена</p>
    <input name="price" size="20" type="number" required>
    <p>Дата приобретения(формат: 00.00.00)</p>
    <input name="startd" size="20" type="text" pattern="\d{1,2}.\d{1,2}.\d{2,4}" required>
    <p>Дата окончания(формат: 00.00.00)</p>
    <input name="endd" size="20" type="text" pattern="\d{1,2}.\d{1,2}.\d{2,4}" required>
    <p>Ключ</p>
    <input name="gamekey" size="20" type="text" required>
    <br> <br>
    <button type="submit" class="btn btn-primary">Добавить цифровой ключ</button>
  </form>
  <br>
  <button onclick='closeForm3()' class="btn btn-outline-danger">Скрыть форму добавления цифрового ключа</button>
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
}
const formWrap2 = document.getElementById('form2');

function openForm2() {
    formWrap2.classList.add('open');
}
function closeForm2() {
    formWrap2.classList.remove('open');
}
const formWrap3 = document.getElementById('form3');

function openForm3() {
    formWrap3.classList.add('open');
}
function closeForm3() {
    formWrap3.classList.remove('open');
}
    </script>
    <a href="get_pdf.php" class="btn btn-info">Скачать PDF</a>
    <a href="get_xls.php" class="btn btn-success">Скачать XLS</a>

</div>
</body>
</html>