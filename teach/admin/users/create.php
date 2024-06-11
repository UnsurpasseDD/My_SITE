<?php session_start();
      include('../../path.php');
      include('../../app/controllers/users.php');
?>

<!doctype html>
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
    <link rel="stylesheet" href="../../assets/css/admin.css">
  </head>
<body>

<?php
 include('../../app/include/header-admin.php');
?>

<div class="container">
    <?php include("../../app/Include/sidebar-admin.php"); ?>
        
        <div class="posts col-9">
            <div class="row title-table">
                <h2>Создание пользователя</h2>
            </div>
            <div class="row add-post">
                <div class="mb-12 col-12 col-md-12 err">
                    <!-- Вывод массива с ошибками -->
                    <?php include "../../app/helps/errorinfo.php"; ?>
                </div>
                <form action="create.php" method="post">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                        <input type="text" class="form-control" name="login" value="" id="formGroupExampleInput" placeholder="Придумайте логин">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Напиши Почту...">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="first-pass" id="exampleInputPassword1">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Повторить пароль</label>
                        <input type="password" class="form-control" name="second-pass" id="exampleInputPassword2">
                    </div>
                    <input name="admin" class="form-check-input" value="1" type="checkbox"  id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Admin?
                        </label>
                    <div class="col">
                        <button name="create-user" class="btn btn-primary" type="submit">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php
include("../../app/Include/footer.php");
?>
<!-- footer End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>