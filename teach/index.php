<?php  include('path.php');  
include('app/database/db.php');
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
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
<body>

<?php
 include('app/Include/header.php');
?>

<!-- блок карусели START -->
<div class="container">
  <div class="row">
    <h2 class="slider-title">Топ публикаций</h2>
  </div>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/logo.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption-hack carousel-caption d-none d-md-block">
            <h5><a href="#">First slide label</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/dostavka-1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption-hack carousel-caption d-none d-md-block">
            <h5><a href="#">Second slide label</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/dostavka-2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption-hack carousel-caption d-none d-md-block">
            <h5><a href="#">Third slide label</a></h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
<!-- блок карусели END -->
<!-- block main -->
<main>
<div class="container">
  <div class="content row">
    <!-- main content -->
    <div class="main-content col-md-9 col-12">
        <h2>Последние публиции</h2>

        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="assets/img/logo.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12  col-md-8">
              <h3>
                <a href="#">Прикольная статья на тему динамического сайта...</a>
              </h3>
              <i class='bx bx-edit-alt' >Имя автора</i>
              <i class='bx bxs-calendar'>Mar 11, 2019</i>
              <p class="preview-text">
                Lorem ispum dolor sit amet consectetur, adipisicing elit.
                Exerlicationem optio possimus a iventore maxime laborum.
              </p>
          </div>
        </div>
        <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="assets/img/logo.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="post_text col-12  col-md-8">
                <h3>
                  <a href="#">Прикольная статья на тему динамического сайта...</a>
                </h3>
                <i class='bx bx-edit-alt' >Имя автора</i>
                <i class='bx bxs-calendar'>Mar 11, 2019</i>
                <p class="preview-text">
                  Lorem ispum dolor sit amet consectetur, adipisicing elit.
                  Exerlicationem optio possimus a iventore maxime laborum.
                </p>
            </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="assets/img/logo.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12  col-md-8">
              <h3>
                <a href="#">Прикольная статья на тему динамического сайта...</a>
              </h3>
              <i class='bx bx-edit-alt' >Имя автора</i>
              <i class='bx bxs-calendar'>Mar 11, 2019</i>
              <p class="preview-text">
                Lorem ispum dolor sit amet consectetur, adipisicing elit.
                Exerlicationem optio possimus a iventore maxime laborum.
              </p>
          </div>
      </div>
      <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="assets/img/logo.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="post_text col-12  col-md-8">
                <h3>
                  <a href="#">Прикольная статья на тему динамического сайта...</a>
                </h3>
                <i class='bx bx-edit-alt' >Имя автора</i>
                <i class='bx bxs-calendar'>Mar 11, 2019</i>
                <p class="preview-text">
                  Lorem ispum dolor sit amet consectetur, adipisicing elit.
                  Exerlicationem optio possimus a iventore maxime laborum.
                </p>
            </div>
        </div>
    </div>
    <!-- sibebar Content -->
    <div class="sidebar col-md-3 col-12">
        <div class="section search">
          <h3>Поиск</h3>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Поиск...">
          </form>
        </div>
        
        <div class="section topics">
          <h3>Категории</h3>
          <ul>
              <li><a href="">Программирование</a></li>
              <li><a href="">Quotes</a></li>
              <li><a href="">FIction</a></li>
              <li><a href="">Biography</a></li>
              <li><a href="">Motivation</a></li>
              <li><a href="">Inspiration</a></li>
              <li><a href="">Life Lessons</a></li>
          </ul>
        </div>

    </div>
</div>
</main>
<!-- block main END -->
<!-- footer -->
<?php
include("app/Include/footer.php");
?>
<!-- footer End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>