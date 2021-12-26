<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Никитин</title>
</head>
<body>

<?php
    mysql_connect("localhost", "f0606542_bd", "WYEBqFkb", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES utf8mb4'); // тип кодировки
    // подключение к базе данных:
    mysql_select_db("f0606542_bd") or die("Нет такой таблицы!");
    $rows=mysql_query("SELECT digital_key.id, games.name AS gname, digital_shop.name AS sname, digital_key.price, digital_key.startd, digital_key.endd, digital_key.gamekey FROM digital_key INNER JOIN digital_shop ON digital_key.shopid=digital_shop.id INNER JOIN games ON digital_key.gameid=games.id WHERE digital_key.id=".$_GET['id']."");
       while ($st = mysql_fetch_array($rows)) {
        $id=$_GET['id'];
        $gameid = $_GET['gameid'];
        $shopid = $_GET['shopid'];
        $price = $st['price'];
        $startd = $st['startd'];
        $endd = $st['endd'];
        $gamekey = $st['gamekey'];
        }?>
<div class="info" style="max-width: 600px; margin: 0 auto;">
<form role="form" action="keys_save_edit.php" autocomplete="off" method="GET">
    <h3>Изменение ключа</h3>
    <p>Игра</p>
    <p>
    <select name="gameid" required>
     <?php
      $result2=mysql_query("SELECT id, name FROM games"); 
    while ($row=mysql_fetch_array($result2)){// для каждой строки из запроса
    if ($gameid==$row['id']) {
    echo "<option value=". $row['id'] ." selected>". $row['name'] ."</option>";
    } else {
        echo "<option value=". $row['id'] .">". $row['name'] ."</option>";
    }
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
        if ($shopid==$row['id']) {
            echo "<option value=". $row['id'] ." selected>". $row['name'] ."</option>";
            } else {
                echo "<option value=". $row['id'] .">". $row['name'] ."</option>";
            }
    }
    ?>
    </select>
    </p>
    <p>Цена</p>
    <input name="price" size="20" type="number" value="<?php echo $price; ?>" required>
    <p>Дата приобретения(формат: 00.00.00)</p>
    <input name="startd" size="20" type="text"  value="<?php echo $startd; ?>" pattern="\d{1,2}.\d{1,2}.\d{2,4}" required>
    <p>Дата окончания(формат: 00.00.00)</p>
    <input name="endd" size="20" type="text" value="<?php echo $endd; ?>" pattern="\d{1,2}.\d{1,2}.\d{2,4}" value="<?php?>" required>
    <p>Ключ</p>
    <input name="gamekey" size="20" type="text" value="<?php echo $gamekey; ?>" required>
    <input name="id" type="hidden" value="<?php echo $id; ?>">
    <br> <br>
    <button type="submit">Сохранить</button>
    <p><a href="index.php"> Вернуться к списку игр </a>
  </form>
</div>
</body>
</html>