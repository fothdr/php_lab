
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
    <h2>Задача №3-6 (варианты 1, 3, 16)</h2>
    <p>1 Удалить из заданного предложения заданное слово.</p>
    
    <form action="s3-6.php" method="post"> 
        <p>Введите предложение(слова разделяйте пробелами):</p>
        <input type="text" name="text1" >
        <p>Введите слово, которое нужно удалить:</p>
        <input type="text" name="word1" >
        <br> <br>
        <input type="submit" value="Удалить слово" name="task1">
    </form>
    <?php
    if (isset($_POST["task1"])) {
     echo "<p>Предложение начальное: ".$_POST["text1"]."</p>";
     echo "<p>Слово для удаления: ".$_POST["word1"]."</p>";
     $delWord=$_POST["word1"];
     $arr=explode(" ", $_POST["text1"]);
     while (array_search($delWord, $arr)) {
     $arrKey=array_search($delWord, $arr);
     unset($arr[$arrKey]);
     }
     $res = implode(" ", $arr);
     echo "<p>Предложение без заданного слова: ".$res."</p>";
     //foreach($arr as $k => $v) {
       // if ($v == $delWord) {
         //   unset($arr);
        //}
    //}
    } 
    ?>

    <p>3 В заданном предложении сосчитать число слов, начинающихся на заданную букву.</p>
    <form action="s3-6.php" method="post"> 
        <p>Введите предложение(слова разделяйте пробелами):</p>
        <input type="text" name="text2" >
        <p>Введите букву, с которой начинается слово:</p>
        <input type="text" name="char2" >
        <br> <br>
        <input type="submit" value="Подсчитать" name="task3">
    </form>
    <?php
    if (isset($_POST["task3"])) {
        $counter=0;
        echo "<br>Текст: ".$_POST["text2"];
        echo "<br>Символ: ".$_POST["char2"];
        if (isset($_POST["char2"])) {
            $char=$_POST["char2"];
            $charUp=mb_strtoupper($char, "UTF-8");
        }
        
        $arr3=explode(" ",$_POST["text2"]);

        for ($n=0; $n < count($arr3); $n++) {
            $arrWord=preg_split('//u',$arr3[$n],-1,PREG_SPLIT_NO_EMPTY);
            if ($arrWord[0] == $char || $arrWord[0] == $charUp) {
                $counter++;
            }
            unset($arrWord);
        }
        echo "<p>Число слов начинающихся с заданной буквы: ".$counter."</p>";
    } 
    ?>

    <p>16 Дана строка, состоящая из русских слов, разделенных пробелами (одним или
        несколькими). Вывести строку, содержащую эти же слова (разделенные одним
        пробелом), но расположенные в обратном порядке.</p>
    <form action="s3-6.php" method="post"> 
        <p>Введите предложение(слова разделяйте пробелами):</p>
        <input type="text" name="text3" >
        <br> <br>
        <input type="submit" value="Перевернуть" name="task16">
    </form>
    <?php
   if (isset($_POST["task16"])) {
    echo "<p>Начальное предложение: ".$_POST["text3"]."</p>";
    // убираем лишние пробелы
    $str=preg_replace('/^([ ]+)|([ ]){2,}/m', '$2', $_POST["text3"]);
    $arr=explode(" ", $str);
    $arrRev=array_reverse($arr);
    $res = implode(" ", $arrRev);
    echo "<p>Полученное предложение: ".$res."</p>";
    
   } 
    ?>
    </div>
</body>
</html>

