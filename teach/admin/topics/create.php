<?php 
      include('../../path.php');
      include("../../app/controllers/topics.php");
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
                <h2>Добавление категорию</h2>
            </div>
            <div class="row add-post">
                <div class="mb-3 col-12 col-md-4 err">
                <p><?=$errMsg?></p>
                </div>
                <form action="create.php" method="post">
                    <div class="col">
                        <input  name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Category" aria-label="Название категории">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Описание категории</label>
                        <textarea name="description"  class="form-control" id="content" rows="3"><?=$description;?></textarea>  
                    </div>
                    <div class="col-12">
                        <button name="topic-create" class="btn btn-primary" type="submit">Создать</button>
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