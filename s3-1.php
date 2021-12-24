
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
    <h2>Задача №3-1</h2>
    <p>В HTML-документе s3-1.html создайте форму с текстовыми полями, в которые
        пользователь вводит два числа, и кнопкой типа Submit. После нажатия копки вызывается
        PHP-скрипт, который выводит только большее из двух чисел или сообщение, что два
        числа равны.</p>
    <form action="s3-1.php" method="get"> 
        <p>Введите числа:</p>
        <input type="text" name="number1" maxlenght="5">
        <input type="text" name="number2" maxlenght="5">
        <input type="submit" value="Проверить">
        <?php 
if ((int) $_GET["number1"] > (int) $_GET["number2"] ) {
    echo "<p>".$_GET["number1"]. " - большее из чисел</p>";
} elseif ((int) $_GET["number1"] < (int) $_GET["number2"] ) {
    echo "<p>".$_GET["number2"]. " - большее из чисел</p>";
} else {
    echo "<p>Числа равны</p>";
}
?>


    </form>
    </div>
</body>
</html>
