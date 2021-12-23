<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Никитин А - ПИ-322</title>
    
</head>
<body>
    <div style="max-width: 600px; margin: 0 auto;">
    <h2>ЗАДАЧА №2-3</h2>
    <p>Создайте ассоциативный массив $cust[] с ключами cnum, cname, city и snum и
значениями: 2001, Hoffman, London, и 1001 Выведите этот массив (вместе с именами
ключей) на экран.</p>
    <?php 
    $cust = array('cnum' => '2001', 
    'cname' => 'Hoffman', 
    'city' => 'London', 
    'snum' => '1001');
    foreach($cust as $k => $f)
        echo $k . ' = '. $f . '<br>';
    ?>
    <p>Добавьте в массив ключ rating со значением 100 Выведите этот массив (вместе с
именами ключей) на экран. Где именно стоит добавленное значение? *ответ* значение в последнем элементе массива</p>
    <?php 
    $cust['rating'] = 100;
    foreach($cust as $k => $f)
        echo $k . ' = '. $f . '<br>';
    
    ?>
    <p>Отсортируйте этот массив по значениям. </p>
<?php 
    asort($cust);
    foreach($cust as $k => $f)
        echo $k . ' = '. $f . '<br>';
    ?>
    <p>Отсортируйте этот массив по ключам. Выведите результат на экран.</p>
<?php 
      ksort($cust);
      foreach($cust as $k => $f)
          echo $k . ' = '. $f . '<br>';
    ?>
    <p>Выполните сортировку массива с помощью функции sort(). Выведите результат на
экран и объясните, что получилось. *ответ* (названия ключей смеинились на числа)</p>
    <?php 
    sort($cust);
    foreach($cust as $k => $f)
        echo $k . ' = '. $f . '<br>';
    ?>
    
</div>
</body>
</html>