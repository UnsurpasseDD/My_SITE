<?php  
  include "path.php";
  include "app/controllers/topics.php";
  $posts = selectAllFromPostsWithUsersOnIndex('posts', 'users');
  $topTopic = selectTopTopicFromPostsOnIndex('posts');
  
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
        <?php foreach ($topTopic as $key => $post): ?>
            <?php if ($key == 0):?>
            <div class="carousel-item active">
            <?php else:?>
              <div class="carousel-item">
            <?php endif;?>
                <img src="<?=BASE_URL . 'assets/img/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="d-block w-100">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                  <h5><a href="<?=BASE_URL . 'single.php?post=' . $post['id']; ?>"><?=substr($post['title'], 0,40 ) . '...'?></a></h5>
                </div>
            </div>
        <?php endforeach;?>
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
        <?php foreach ($posts as $post): ?>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="<?=BASE_URL . 'assets/img/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
          </div>
          <div class="post_text col-12  col-md-8">
              <h3>
                <a href="<?=BASE_URL . 'single.php?post=' . $post['id']; ?>"><?=substr($post['title'], 0,40 ) . '...'?></a>
              </h3>
              <i class='bx bx-edit-alt' ><?=$post['username']; ?></i>
              <i class='bx bxs-calendar'><?=$post['created_date']; ?></i>
              <p class="preview-text">
                  <?=mb_substr($post['content'], 0, 150, 'UTF-8') . '...' ?>
              </p>
          </div>
        </div>
        <?php endforeach; ?>
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
              <li><a href=""><?=$topic['name']; ?></a></li>
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