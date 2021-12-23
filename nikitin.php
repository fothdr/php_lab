<?php
// вывод задачи
function getTask4() {
 echo "<p>Дана матрица А(m,n). Найти вектор В(n), каждый элемент которого равен сумме элементов
 соответствующего столбца матрицы А. Исходный и скорректированный массивы
 вывести на экран.</p>";
}
// создание и заполнение массива
function createMas4() {
    $arr = array(
		array('2', '4', '5'),
		array('12', '15', '10'),
		array('20', '15', '20'),
    );

    echo "<table border=1>";
    foreach ($arr as $f){
        echo "<tr>";
        foreach ($f as $k){
                echo "<td class='table-cell-item'>{$k}</td>";
        }
        echo "</tr>";
}
    echo "</table>";    
}
function solveMas4() {
    $vect = array();
    $arr = array(
		array('2', '4', '5'),
		array('12', '15', '10'),
		array('20', '15', '20'),
    );

    //echo $arr[0][1];

    for ($j=0;$j <= 2; $j++) {
        $sum = 0;
        for ($i=0;$i <= 2; $i++) {
    
            $sum = $sum + $arr[$i][$j];
        }
        $vect[$j] = $sum;
    }

    echo "<br><table border=1>";
    echo "<tr>";
    for ($n = 0; $n < count($vect); $n++){
        echo "<td>".$vect[$n]."</td>";
    }      
    echo "</tr>";
    echo "</table>";  
}


/// ВАРИАНТ 15

function getTask15() {
    echo "<p>Просуммировать элементы двумерного массива, сумма индексов которых равна заданной
    константе.</p>";
   }
   // создание и заполнение массива
   function createMas15() {
       $arr = array(
           array('2', '4', '5'),
           array('12', '15', '10'),
           array('20', '15', '20'),
       );
   
       echo "<table border=1>";
       foreach ($arr as $f){
           echo "<tr>";
           foreach ($f as $k){
                   echo "<td class='table-cell-item'>{$k}</td>";
           }
           echo "</tr>";
   }
       echo "</table>";    
   }
   function solveMas15() {
       // задан
       $k = 1;
       $sum = 0;
       $arr = array(
           array('2', '4', '5'),
           array('12', '15', '10'),
           array('20', '15', '20'),
       );
   
       //echo $arr[0][1];
   
       for ($j=0;$j <= 2; $j++) {
           for ($i=0;$i <= 2; $i++) {
                if ($i+$j==$k) {
                    $sum = $sum + $arr[$i][$j];
                } 
           }
           
       }
       echo "Сумма элементов, сумма индексов которых равна константе K = 1, равна = " . $sum; 
   }
      



?>