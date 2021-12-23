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
    <h2>ЗАДАЧА №2-1</h2>
    <p>Создайте массив $treug[] «треугольных» чисел, т.е. чисел вида n(n+1)/2 (где n=1,
2, …, 10) и выведите значения этого массива на экран в строку (через пробел).</p>
    <?php 
    for ($n = 1; $n<=10; $n++) {
        $treug[$n] = ($n*($n+1))/2;
        echo $treug[$n] . " ";
    }
    ?>
    <p>Создайте массив $kvd[] квадратов натуральных чисел от 1 до 10, выведите значения
этого массива на экран в строку.</p>
    <?php 
    for ($n = 1; $n<=10; $n++) {
        $kvd[$n] = pow($n, 2);
        echo $kvd[$n] . " ";
    }
    ?>
    <p>Объедините эти два массива в массив $rez[], выведите результат на экран.</p>
<?php 
    $rez = array_merge($treug, $kvd);
    for ($n = 0; $n <= count($rez); $n++) {
        echo $rez[$n] . " ";
    }
    ?>
    <p>Отсортируйте массив $rez[], выведите результат на экран.</p>
<?php 
    sort($rez);
    for ($n = 0; $n <= count($rez); $n++) {
        echo $rez[$n] . " ";
    }
    ?>
    <p>Удалите в массиве $rez[] первый элемент, выведите результат на экран.</p>
    <?php 
    unset($rez[0]);
    for ($n = 0; $n <= count($rez); $n++) {
        echo $rez[$n] . " ";
    }
    ?>
    <p>С помощью функции array_unique() удалите из массива $rez[] повторяющиеся
элементы, результат занесите в массив $rez1[] и выведите его на экран.</p>
    <?php 
     $rez1 = array_unique($rez);
    for ($n = 0; $n <= count($rez1) + 1; $n++) {
        echo $rez1[$n] . " ";
    }
    ?>
</div>
</body>
</html>