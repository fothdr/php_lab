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

require('fpdf/fpdf.php');

define('FPDF_FONTPATH',"fpdf/font/");

class PDF extends FPDF
{
function Headr()
{       
    $this->SetFillColor(125, 235, 125);     
    $this->Cell(15, 10, iconv('utf-8', 'windows-1251',"№ п/п"), 1, 0, 'L',1);
    $this->Cell(50, 10, iconv('utf-8', 'windows-1251',"Название игры"), 1, 0, 'L',1);
    $this->Cell(30, 10, iconv('utf-8', 'windows-1251',"Жанр"), 1, 0, 'L',1);
    $this->Cell(40, 10, iconv('utf-8', 'windows-1251',"Разработчик"), 1, 0, 'L',1);
    $this->Cell(30, 10, iconv('utf-8', 'windows-1251',"Издатель"), 1, 0, 'L',1);
    $this->Cell(50, 10, iconv('utf-8', 'windows-1251',"Цифровой ключ"), 1, 0, 'L',1);
    $this->Cell(50, 10, iconv('utf-8', 'windows-1251',"Дата приобретения"), 1, 0, 'L',1);
    $this->Cell(40, 10, iconv('utf-8', 'windows-1251',"Дата окончания"), 1, 0, 'L',1);
    $this->Cell(65, 10, iconv('utf-8', 'windows-1251',"Url магазина"), 1, 0, 'L',1);
    $this->Ln();
}
function BasicTable($result)
{
    $counter=1;
    while($object = mysql_fetch_array($result)){
        $this->SetFillColor(235);
        $this->Cell(15,6,$counter,1, 0, 'C',1);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['gname']),1, 0, 'L',1);
        $this->Cell(30,6,iconv('utf-8', 'windows-1251',$object['genre']),1, 0, 'L',1);
        $this->Cell(40,6,iconv('utf-8', 'windows-1251',$object['dev']),1, 0, 'L',1);
        $this->Cell(30,6,iconv('utf-8', 'windows-1251',$object['publ']),1, 0, 'L',1);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['gamekey']),1, 0, 'L',1);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['startd']),1, 0, 'L',1);
        $this->Cell(40,6,iconv('utf-8', 'windows-1251',$object['endd']),1, 0, 'L',1);
        $this->Cell(65,6,iconv('utf-8', 'windows-1251',$object['urls']),1, 0, 'L',1);
        $this->Ln();
        $counter++;
        $fill=!$fill;
    }
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,iconv('utf-8', 'windows-1251',$data[$row]),1);
        $this->Ln();
    }
}
}

$pdf=new PDF();
$pdf->AddFont('Arial','','arial.php');
$pdf->SetFont('Arial');
$pdf->AddPage('L','A3');
$pdf->SetDisplayMode('real','default');
$pdf->SetXY (10,20);
$pdf->SetFontSize(14);
$pdf->Headr();
$pdf->BasicTable($result);
$pdf->Output('digital_keys.pdf','D');?>