
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
    <h2>Задача №3-2</h2>
    <p>Используя PHP-скрипт и форму в одном документе, создать PHP-файл s3-2.php, который
позволяет пользователю передать два числа и указать операцию, выполняемую над ними
(см. рис.). Предусмотреть проверку вводимых данных.</p>
    <p>
    <form action="s3-2.php" method="post"> 
        <p>Введите числа:</p>
        <input type="number" name="number1" >
        <input type="number" name="number2" >
        <select name="act">
        <option value="1">Умножить</option>
        <option selected value="2">Сложить</option>
        <option value="3">Вычесть</option>
        <option value="4">Разделить</option>
        </select>
    </p>
        <input type="submit" value="Выполнить">

    </form>
    <?php 
$res = 0;
        switch ($_POST["act"]) {
            case 1:
                $res = (int) $_POST["number1"] * (int) $_POST["number2"];
                echo "<p>".$res.  " - результат умножения</p>";
                break;
            case 2:
                $res = (int) $_POST["number1"] + (int) $_POST["number2"];
                echo "<p>".$res.  " - результат сложения</p>";
                break;
            case 3:
                $res = (int) $_POST["number1"] - (int) $_POST["number2"];
                echo "<p>".$res.  " - результат вычитания</p>";
                break;
            case 4:
                if ((int) $_POST["number2"] != 0) {
                $res = (int) $_POST["number1"] / (int) $_POST["number2"];
                echo "<p>".$res.  " - результат деления/p>";
                } else {
                echo "<p>Делитель равен 0.</p>";
                }
                break;
        }
?>
    </div>
</body>
</html>

