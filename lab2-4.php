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
    <h2>ЗАДАЧА №2-4 Вариант 15 и 4</h2>
    <p>4. В массиве A(N) определить максимальное количество подряд идущих положительных
элементов, не прерываемых ни нулями, ни отрицательными элементами.</p>
    <?php 
    $arr = array(1,2,3,4,0,5,4,3,-2,4,-4);
    $max = array();
     // счетчик кол-ва подряд идущих элементов
    $counter = 0;
    for ($n = 0; $n<=count($arr) + 1; $n++) {
        
        echo $arr[$n] . " ";
    } 
    echo "<br>";
    foreach($arr as $k){
        if($k > 0) {
            $counter++;
         } else {
            $max[] = $counter;
            // обнуление при обнаружении отриц. числа или нуля
            $counter = 0;
         }
    }
    // тест echo var_dump($max) . "<br>";
    echo "Максимальное количество подряд идущих положительных элементов: " . max($max);
    
    ?>
    <p>15. Если в данном массиве действительных чисел A(N)есть хотя бы одно число, меньшее
чем -2,то все отрицательные числа заменить их квадратами. Исходный и
скорректированный массивы вывести на экран. </p>
    <?php 
     $arr = array(1,2,-3,4,-5,5,4,3,-2,4,-4);
     $arrCorr = array();
      
     echo "<p> Исходный массив </p>";
     for ($n = 0; $n<=count($arr); $n++) {
         echo $arr[$n] . " ";
     } 
     echo "<p> Скорректированный массив </p>";
     for ($n = 0; $n<=count($arr); $n++) {
         if ($arr[$n] < -2) {
            for ($f = 0; $f<=count($arr) - 1; $f++) {
                if ($arr[$f] < 0) {
                    $arrCorr[] = pow($arr[$f], 2);
                } else {
                    $arrCorr[] = $arr[$f];
                }
            }
            break;
         }
     } 
     for ($s = 0; $s<=count($arrCorr); $s++) {
        echo $arrCorr[$s] . " ";
    } 
    ?>

    
</div>
</body>
</html>