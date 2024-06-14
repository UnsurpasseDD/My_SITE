<?php include("path.php");
      include SITE_ROOT . "/app/database/db.php";
  $post = selectOne('posts', ['id' => $_GET['post']]);
  tt($post);
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
    <link rel="stylesheet" href="css/style.css">
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
    <div class="single_main-content col-md-9 col-12">
        <h2>Заголовок определенной статьи, потом будет ясно... 
            Дома хорошо, а в гостях веселее.
        </h2>

        <div class="single_post row">
          <div class="img col-12">
            <img src="assets/img/logo.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="info">
            <i class='bx bx-edit-alt' >Имя автора</i>
            <i class='bx bxs-calendar'>Mar 11, 2019</i>
          </div>
          <div class="single_post_text col-12">
              <h3> Заголовок</h3>
              <p><a href="#">Программирование</a> - это увлекательный и креативный процесс, позволяющий создавать уникальные и инновационные программы и приложения.
                 Оно открывает возможности для решения различных задач и развития новых технологий. 
                 Благодаря программированию мы можем автоматизировать рутинные задачи, улучшать производительность и создавать удобные и эффективные решения для пользователей. 
                 Начать изучение программирования никогда не поздно - это навык, 
                 который непрерывно развивается и приносит множество возможностей для творчества и самореализации.</p>
                <p>Программирование - это увлекательный и креативный процесс, позволяющий создавать уникальные и инновационные программы и приложения.
                    Оно открывает возможности для решения различных задач и развития новых технологий. 
                    Благодаря программированию мы можем автоматизировать рутинные задачи, улучшать производительность и создавать удобные и эффективные решения для пользователей. 
                    Начать изучение программирования никогда не поздно - это навык, 
                    который непрерывно развивается и приносит множество возможностей для творчества и самореализации.</p>
                    <p>Программирование - это увлекательный и креативный процесс, позволяющий создавать уникальные и инновационные программы и приложения.
                        Оно открывает возможности для решения различных задач и развития новых технологий. 
                        Благодаря программированию мы можем автоматизировать рутинные задачи, улучшать производительность и создавать удобные и эффективные решения для пользователей. 
                        Начать изучение программирования никогда не поздно - это навык, 
                        который непрерывно развивается и приносит множество возможностей для творчества и самореализации.</p>
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