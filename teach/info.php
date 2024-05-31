<?php  include('path.php');  
include('app/database/db.php');
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

<!-- block main -->
<main>
    <div class="container">
      <div class="content row">
        <!-- main content -->
        <div class="info_main-content col-md-9 col-12">
            <h2>Мы команда друзья. Мы семья.
                Мы команда SAYS.
            </h2>
    
            <div class="info row">
              <div class="img col-12">
                <img src="assets/img/logo-1.jpg" alt="" class="img-thumbnail">
              </div>
              <div class="info_text col-12">
                  <h3> Заголовок</h3>
                  <p>Команда САЮС занимается праздниками уже 3 год на острове Сахалин в г. Южно-Сахалинск.
                    В команде 6 человек, но уже больше сотни положительных отзывов и набирать их не собираемся останавливаться.
                  </p>
              </div>
            </div>
        </div>
    
        <!-- sibebar Content -->
    
        <div class="info_sidebar col-md-3 col-12">
            
            
            <div class="info_section info_topics">
              <h3>Команда</h3>
              <ul>
                  <li><a href="">Человек 1</a></li>
                  <li><a href="">Человек 2</a></li>
                  <li><a href="">Человек 3</a></li>
                  <li><a href="">Человек 4</a></li>
              </ul>
            </div>
    
        </div>
    </div>
    </main>
    <!-- block main END -->

<!-- Footer -->
<?php
include("app/Include/footer.php");
?>
<!-- footer End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>