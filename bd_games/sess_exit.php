<?php
session_start();
if (!isset($_SESSION['login'])) {
  $_SESSION['msg']="Требуется авторизация!";
  header('Location: auth.php');
} else {
    session_unset();
    $_SESSION['msg']="Успешный выход!";
    header('Location: auth.php');
}
?>