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
    <h2>Задача №3-5</h2>
    <p>Создайте файл s3-5.php с HTML-формой анкеты, определяющей характер человека.
Пользователю предлагается в текстовом поле ввести свое имя, а затем ответить «да» или
«нет» на следующие вопросы:</p>
    
    <form action="s3-5.php" method="post"> 
        <p>Ваше имя:</p>
        <input type="text"  name="im">
        <p>1 Считаете ли Вы, что у многих ваших знакомых хороший характер?</p>
        <input type="radio"  name="vp1" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp1" value="1"> 
        <label >Нет</label>
        <p>2 Раздражают ли Вас мелкие повседневные обязанности?</p>
        <input type="radio"  name="vp2" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp2" value="1"> 
        <label >Нет</label>
        <p>3 Верите ли Вы, что ваши друзья преданы Вам?</p>
        <input type="radio"  name="vp3" value="1" checked> 
        <label >Да</label>
        <input type="radio"   name="vp3" value="0"> 
        <label >Нет</label>
        <p>4 Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</p>
        <input type="radio"  name="vp4" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp4" value="1"> 
        <label >Нет</label>
        <p>5 Способны ли Вы ударить собаку или кошку?</p>
        <input type="radio"  name="vp5" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp5" value="1"> 
        <label >Нет</label>
        <p>6 Часто ли Вы принимаете лекарства?</p>
        <input type="radio"  name="vp6" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp6" value="1"> 
        <label >Нет</label>
        <p>7 Часто ли Вы меняете магазин, в который ходите за продуктами?</p>
        <input type="radio"  name="vp7" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp7" value="1"> 
        <label >Нет</label>
        <p>8 Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</p>
        <input type="radio"  name="vp8" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp8" value="1"> 
        <label >Нет</label>
        <p>9 Тяготят ли Вас общественные обязанности?</p>
        <input type="radio"  name="vp9" value="1" checked> 
        <label >Да</label>
        <input type="radio"   name="vp9" value="0"> 
        <label >Нет</label>
        <p>10 Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</p>
        <input type="radio"  name="vp10" value="1" checked> 
        <label >Да</label>
        <input type="radio"   name="vp10" value="0"> 
        <label >Нет</label>
        <p>11 Часто ли Вам приходят в голову мысли о Вашей невезучести?</p>
        <input type="radio"  name="vp11" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp11" value="1"> 
        <label >Нет</label>
        <p>12 Сохранилась ли у Вас фигура по сравнению с прошлым?</p>
        <input type="radio"  name="vp12" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp12" value="1"> 
        <label >Нет</label>
        <p>13 Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</p>
        <input type="radio"  name="vp13" value="1" checked> 
        <label >Да</label>
        <input type="radio"   name="vp13" value="0"> 
        <label >Нет</label>
        <p>14 Нравится ли Вам семейная жизнь?</p>
        <input type="radio"  name="vp14" value="1" checked> 
        <label >Да</label>
        <input type="radio"   name="vp14" value="0"> 
        <label >Нет</label>
        <p>15 Злопамятны ли Вы?</p>
        <input type="radio"  name="vp15" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp15" value="1"> 
        <label >Нет</label>
        <p>16 Находите ли Вы, что стоит погода, типичная для данного времени года?</p>
        <input type="radio"  name="vp16" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp16" value="1"> 
        <label >Нет</label>
        <p>17 Случается ли Вам с утра быть в плохом настроении?</p>
        <input type="radio"  name="vp17" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp17" value="1"> 
        <label >Нет</label>
        <p>18 Раздражает ли Вас современная живопись?</p>
        <input type="radio"  name="vp18" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp18" value="1"> 
        <label >Нет</label>
        <p>19 Надоедает ли Вам присутствие чужих детей в доме более одного часа?</p>
        <input type="radio"  name="vp19" value="1" checked> 
        <label >Да</label>
        <input type="radio"   name="vp19" value="0"> 
        <label >Нет</label>
        <p>20 Надоедает ли Вам делать лабораторные по PHP?</p>
        <input type="radio"  name="vp20" value="0" checked> 
        <label >Да</label>
        <input type="radio"   name="vp20" value="1"> 
        <label >Нет</label>
        <br>
        <br>
        <input type="submit" value="Узнать результат" name="btn">

    </form>
    <p>
    <?php 
    if (isset($_POST["btn"])) {
     echo "Ваше имя:".$_POST["im"]."<br>";
     $res = 0;
     for ($n=1; $n<=20; $n++) {
         $res+=(int)$_POST["vp$n"];
     }
     if ($res > 15) {
         echo "У Вас покладистый характер";
     } elseif ($res >= 8 && $res <= 15) {
        echo "Вы не лишены недостатков, но с вами можно ладить";
     } else {
        echo "Вашим друзьям можно посочувствовать";
     }
    }  
    ?>
    </p>
    </div>
</body>
</html>

