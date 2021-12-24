
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Никитин А - ПИ-322</title>
</head>
<body>
    <div class="info" style="max-width: 600px; margin: 0 auto;">
    <a href="lab3.php"><h4>Назад в задачам</h3></a>
    <h2>Задача №3-3</h2>
    <p>Список содержит следующие операции: четные, нечетные, простые,
составные. Вывести все числа из диапазона от 1 до N, согласно выбранному из списка
действию (N вводится пользователем в текстовое поле).</p>
    <p>
    <form action="s3-3.php" method="post"> 
        <p>Введите число N</p>
        <input type="number" name="number1" >
        <select name="act">
        <option value="1">Четные</option>
        <option selected value="2">Нечетные</option>
        <option value="3">Простые</option>
        <option value="4">Составные</option>
        </select>
    </p>
        <input type="submit" value="Выполнить">

    </form>
    <?php 
    $arr = array();
    for ($n = 0; $n<=(int) $_POST["number1"] - 1; $n++) {
        $arr[$n] = $n + 1;
    }
    echo "<p>Полученные числа:</p>";
    $arrRes=array();
        switch ($_POST["act"]) {
            case 1:
                for ($n = 0; $n<=(int) $_POST["number1"]; $n++) {
                    if (!($arr[$n] % 2)) {
                        $arrRes[$n] = $arr[$n];
                    }
                }
                foreach ($arrRes as $value) {
                    echo $value, " ";
                  }
                break;
            case 2:
                for ($n = 0; $n<=(int) $_POST["number1"]; $n++) {
                    if (($arr[$n] % 2)) {
                        $arrRes[$n]=$arr[$n];
                    }
                }
                foreach ($arrRes as $value) {
                    echo $value, " ";
                  }
                break;
            case 3:
                foreach($arr as $key => $value)
                {
                    if(!if_natural($value)) {
                        unset($arr["$key"]);
                    }
                }
                foreach ($arr as $value) {
                    echo $value, " ";
                  }
                break;
            case 4:
                foreach($arr as $key => $value)
                {
                    if(if_natural($value)) {
                        unset($arr["$key"]);
                    }
                }
                foreach ($arr as $value) {
                    echo $value, " ";
                  }
                break;
        }

        function if_natural($n){
            if($n==1 or $n==0)return false;
            for($d=2; $d*$d<=$n; $d++)
                { 
                    if($n%$d==0)return false;
                }
            return true;
            }
?>
    </div>
</body>
</html>

