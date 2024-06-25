<?php include("path.php");
      include "app/controllers/topics.php";
      $post = selectPostFromPostsWithUsersOnSingle('posts', 'users', $_GET['post']);
      
?>

<!doctype html>
<html lang="ru">
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
include ('app/Include/header.php');
?>

<!-- block main -->
<main>
<div class="container">
  <div class="content row">
    <!-- main content -->
    <div class="single_main-content col-md-9 col-12">
        <h2><?php echo $post['title']; ?></h2>
        

        <div class="single_post row">
          <div class="img col-12">
            <img src="<?=BASE_URL . 'assets/img/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
          </div>
          <div class="info">
            <i class='bx bx-edit-alt' ><?=$post['username'];?></i>
            <i class='bx bxs-calendar'><?=$post['created_date']; ?></i>
          </div>
          <div class="single_post_text col-12">
          <?=$post['content'];?>
          </div>
          <!-- include comment -->
          <?php include ('app/Include/comment.php') ?>
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
              <?php foreach ($topics as $key => $topic): ?>
                <li><a href="<?=BASE_URL . 'category.php?id=' . $topic['id'];?>"><?=$topic['name']; ?></a></li>
              <?php endforeach; ?>
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