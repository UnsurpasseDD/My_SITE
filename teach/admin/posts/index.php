<?php 
      include('../../path.php');
      include("../../app/controllers/posts.php");
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
                <h2>Управление постами</h2>
                <div class="col-1">ID</div>
                <div class="col-3">Название</div>
                <div class="col-2">Автор</div>
                <div class="col-6">Управление</div>
            </div>
            <?php foreach ($postsAdm as $key => $post): ?>
            <div class="row post">
                <div class="id col-1"><?=$key + 1; ?></div>
                <div class="title col-3"><?=$post['title']; ?></div>
                <div class="author col-2"><?=$post['username']; ?></div>
                <div class="red col-2"><a href="edit.php?id=<?=$post['id'];?>">edit</a></div>
                <div class="del col-2"><a href="index.php?del_id=<?=$post['id']; ?>">delete</a></div>
                <?php if($post['status']): ?>
                  <div class="status col-2"><a href="edit.php?publish=0&pub_id=<?=$post['id']; ?>">снять с пуб.</a></div>
                <?php else: ?>
                  <div class="status col-2"><a href="edit.php?publish=1&pub_id=<?=$post['id']; ?>">Опубликовать</a></div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
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