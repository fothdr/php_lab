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
    <h2>ЗАДАЧА №2-5 Вариант 15 и 4</h2>
    <p>Найти значение переменной z, заданной суммой функций. Для нахождения значения
функции f(u,t) написать пользовательскую функцию. Числа a и b – случайные.</p>
    <h3> Вариант 4 </h3>
    <img src="https://i.imgur.com/kzR67ck.png" alt="Вариант 4"><br>
    <?php 
     function Nikitin4($u, $t) {
        if ( $u >= 0 && $t >= 0 )
            return $u;
        elseif ( $u < 0 && $t >= 0 )
            return $t;
        elseif ( $u >=0 && $t < 0 )
            return $u-2*$t;
        elseif ( $u < 0 && $t < 0 )
            return $u*$t+3*$t;
    }

    $a = rand(1, 10);
    $b = rand(1, 10);
    $z = Nikitin4($a-$b*$b, $b-$a) + Nikitin4($a, $b-$a*$a);
    echo "<h3 >Значение z = " . $z . " при a = ". $a . " и b = " . $b."</h4>";
    
    ?>
    <h3> Вариант 15 </h3>
    <img src="https://i.imgur.com/0KieeNQ.png" alt="Вариант 15"><br>
    <?php 
    function Nikitin15($u, $t) {
        if ( $u*$u > abs(4*$u*$t) )
            return log($u+$t);
        elseif ( $u*$u < abs(4*$u*$t) )
            return tan(1/$u*$t);
        elseif ( $u*$u == abs(4*$u*$t) )
            return pow(exp(), $u*$t+sqrt(sin($u)));

    }

    $a = rand(1, 10);
    $b = rand(1, 10);
    $z = pow(sin(Nikitin15($a, $b)), 2) + Nikitin15(log($a-$b), $b);
    echo "<h3 >Значение z = " . $z . " при a = ". $a . " и b = " . $b."</h3>";
    ?>

    
</div>
</body>
</html>