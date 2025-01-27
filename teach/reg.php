<?php 
  include("path.php");
  include("app/controllers/users.php");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
<body>
<?php
 include('app/Include/header.php');
?>
<!-- END HEADER -->
<!-- FORM -->
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="reg.php">
        <h2 class="col-12">Регистрация</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMsg?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input type="text" class="form-control" name="login" value="<?=$login ?>" id="formGroupExampleInput" placeholder="Придумайте логин">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?=$email ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Ваш email не будет использован для спама.</div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" class="form-control" name="first-pass" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 ccol-12 col-md-4">
            <label for="exampleInputPassword2" class="form-label">Повторить пароль</label>
            <input type="password" class="form-control" name="second-pass" id="exampleInputPassword2">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 ccol-12 col-md-4">
            <button type="submit" class="btn btn-outline-secondary" name="button-reg">Регистрация</button>
            <a href="aut.html" class="btn btn-outline-secondary">Войти</a>
        </div>
    </form>
</div>

<!-- END FORM -->
<!-- footer -->
<?php
include("app/Include/footer.php");
?>
<!-- footer End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>