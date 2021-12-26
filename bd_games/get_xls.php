<?php 
session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['msg']="Требуется авторизация!";
    header('Location: auth.php');
  }
mysql_connect("localhost", "f0606542_bd", "h3t6baLp", "f0606542_bd") or die ("Невозможно подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES utf8mb4'); // тип кодировки
// подключение к базе данных:
mysql_select_db("f0606542_bd") or die("Нет такой таблицы!" . mysqli_connect_error());
$sql = "SELECT digital_key.id, games.name AS gname, games.id AS gameid, games.genre AS genre, games.dev \n"

    . " AS dev, games.publ AS publ, digital_shop.id AS shopid, digital_shop.name \n"

    . " AS sname, digital_shop.url AS urls, digital_key.price, digital_key.startd, digital_key.endd, digital_key.gamekey FROM digital_key \n"

    . " INNER JOIN digital_shop ON digital_key.shopid=digital_shop.id INNER JOIN games ON digital_key.gameid=games.id;";
 $result=mysql_query($sql);


 require 'phpexcel/Classes/PHPExcel.php';
 $pExcel = new PHPExcel();
 $aSheet = $pExcel->setActiveSheetIndex(0);
 $aSheet->setTitle('Цифровые ключи');
 $aSheet->setCellValue('A1','№ п/п');
 $aSheet->setCellValue('B1','Название игры');
 $aSheet->setCellValue('C1','Жанр');
 $aSheet->setCellValue('D1','Разработчик');
 $aSheet->setCellValue('E1','Издатель');
 $aSheet->setCellValue('F1','Цифровой ключ');
 $aSheet->setCellValue('G1','Дата приобретения');
 $aSheet->setCellValue('H1','Дата окончания');
 $aSheet->setCellValue('I1','Url магазина');
 $i = 1;
 while ($st = mysql_fetch_array($result)) {
     $aSheet->setCellValue('A'.($i+1), $i);
     $aSheet->setCellValue('B'.($i+1), $st['gname']);
     $aSheet->setCellValue('C'.($i+1), $st['genre']);
     $aSheet->setCellValue('D'.($i+1), $st['dev']);
     $aSheet->setCellValue('E'.($i+1), $st['publ']);
     $aSheet->setCellValue('F'.($i+1), $st['gamekey']);
     $aSheet->setCellValue('G'.($i+1), $st['startd']);
     $aSheet->setCellValue('H'.($i+1), $st['endd']);
     $aSheet->setCellValue('I'.($i+1), $st['urls']);
     $i++;
 }
 ob_end_clean();
 header('Content-Type:xlsx:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 header('Content-Disposition:attachment;filename="digital_keys.xlsx"');
 ob_end_clean();
 $objWriter = new PHPExcel_Writer_Excel2007($pExcel);
 $objWriter->save('php://output');
 exit;?>