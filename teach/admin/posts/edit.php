<?php 
      include('../../path.php');
      include("../../app/controllers/posts.php");
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
                <h2>Редактирование</h2>
            </div>
            <div class="row add-post">
                <div class="mb-12 col-12 col-md-12 err">
                    <!-- Вывод массива с ошибками -->
                    <?php include "../../app/helps/errorinfo.php"; ?>
                </div>
                <form action="create.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$id; ?>">
                    <div class="col mb-4">
                        <input value="<?=$post['title']; ?>" name="title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                    </div>
                    <div class="col">
                        <label for="editor" class="form-label">Текст</label>
                        <textarea name="content" id="editor" class="form-control"  rows="10"><?=$post['content'];?></textarea>  
                    </div>
                    <div class="input-group col mb-4 mt-4">
                        <input name="img" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <select name="topic" class="form-select mb-2" aria-label="Default select example">                  
                        <?php foreach ($topics as $key => $topic): ?>
                             <option value="<?=$topic['id']; ?>"><?=$topic['name'];?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="form-check">
                        <?php if (empty($publish) && $publish == 0): ?>
                            <input name="publish" class="form-check-input" type="checkbox"  id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                                Publish
                            </label>
                        <?php else: ?>
                            <input name="publish" class="form-check-input" type="checkbox"  id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Publish
                            </label>
                        <?php endif; ?>
                    </div>
                    <div class="col col-6">
                        <button name="edit_post" class="btn btn-primary" type="submit">Сохранить запись</button>
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
    <!-- Сkeditor для чата -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

<script src="../../assets/js/scripts.js"></script>
    </body>
</html>