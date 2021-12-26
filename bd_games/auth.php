<?php 
session_start();

session_start();
if (isset($_SESSION['login'])) {
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация - Никитин</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body >
   <section class="vh-100" style="background: linear-gradient(90deg, #cfecd0, #a0cea7, #9ec0db);">
   
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <form action="sess.php" method="POST">
            <h3 class="mb-5">Авторизация</h3>

            <div class="form-outline mb-4">
              <label class="form-label" for="typeEmailX-2">Логин</label>
              <input type="login" id="typeEmailX-2" class="form-control form-control-lg" name="login" />
              
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="typePasswordX-2">Пароль</label>
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password"/>
              
            </div>

            <input class="btn btn-lg" type="submit" style="width: 100%; background: linear-gradient(90deg, #cfecd0, #a0cea7, #9ec0db); color: #fff" value="Авторизация">
            
           
            </form>
            <?php
            if (isset($_SESSION['msg'])):
            ?>
            <p><?=$_SESSION['msg'];?></p>
            <?php unset($_SESSION['msg']);
            endif;?>
            <a href="/" class="btn btn-lg" style="width: 100%; background: linear-gradient(90deg, rgba(56,56,56,1) 0%, rgba(101,107,135,1) 100%, rgba(15,103,159,1) 100%); color: #fff; margin-top: 10px;">К списку лабораторных</a>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</section> 
</body>
</html>