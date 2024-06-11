<?php
include SITE_ROOT . "/app/database/db.php";
if (!$_SESSION){
    header('location: ' . BASE_URL .'log.php');
}

$errMsg = [];
$id = '';
$title = '';
$content = '';
$topic = '';
$img = '';

$topics = selectALL('topics');
$posts = selectALL('posts');
$postsAdm = selectAllFromPostsWithUsers('posts', 'users');

// Форма создание категории
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['add_post'])){
    
    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH .'\assets\img\posts\\'. $imgName; 
        $fileType = $_FILES['img']['type'];

        if(strpos($fileType, 'image') === false){
            array_push($errMsg,'Можно загружать только изображения');
        }else{
            $result = move_uploaded_file($fileTmpName, $destination);
            if($result){
                $_POST['img'] = $imgName;
            }else{
                $errMsg .= 'Ошибка загрузки Image на сервер!';
            }
        }

        }else{
            $errMsg .= 'Ошибка получения image!';
        }   

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    $publish = isset($_POST['publish']) ? 1 : 0;

    if ($title === '' || $content === '' || $topic === '' ){
        array_push($errMsg,'Не все поля заполнены!');
    }elseif(mb_strlen($title, 'UTF8') < 7){
        $errMsg = "Придумайте длиннее название";
    }else{
        $existence = selectOne('posts', ['title' => $title]);
        if (!empty($existence['title']) && $existence['title'] === $title){
            $errMsg = " Такое название поста уже есть";
        }else{
            $post = [
                'id_user' => $_SESSION['id'],
                'title' => $title,
                'content' => $content,
                'img' => $_POST['img'],
                'status' => $publish,
                'id_topic' => $topic
            ];
            $post = insert('posts', $post);
            $post = selectOne('posts', ['id' => $id]);
            header('location: ' . BASE_URL . 'admin/posts/index.php');
        }
    }
    //     $last_row = selectOne('users', ['id' => $id]);
}else{
    $id = '';
    $title = '';
    $content = '';
    $publish = '';
    $topic = '';
}


// Редактор категории
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $post = selectOne('posts', ['id'=> $_GET['id']]);
    $title = $post['title'];
    $content = $post['content'];
    $topic = $post['id_topic'];
    // $img = $post['img'];
    $publish = $post['status'];
}

// доделать 23:00 время видео

if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['edit_post'])){
    
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    $publish = isset($_POST['publish']) ? 1 : 0;

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH .'\assets\img\posts\\'. $imgName; 
        $fileType = $_FILES['img']['type'];

        if(strpos($fileType, 'image') === false){
            array_push($errMsg,'Можно загружать только изображения');
        }else{
            $result = move_uploaded_file($fileTmpName, $destination);
            if($result){
                $_POST['img'] = $imgName;
            }else{
                array_push($errMsg,'Ошибка загрузки Image на сервер!');
            }
        }

        }else{
            array_push($errMsg,'Ошибка получения image!');
        }   

    if ($title === '' || $content === '' || $topic === '' ){
        array_push($errMsg,'Не все поля заполнены!');
    }elseif(mb_strlen($title, 'UTF8') < 7){
        array_push($errMsg,'Придумайте длиннее название');
    }else{
        $existence = selectOne('posts', ['title' => $title]);
        if (!empty($existence['title']) && $existence['title'] === $title){
            array_push($errMsg,'Такое название поста уже есть');
        }else{
                $post = [
                    'id_user' => $_SESSION['id'],
                    'title' => $title,
                    'content' => $content,
                    'img' => $_POST['img'],
                    'status' => $publish,
                    'id_topic' => $topic
                ];
                $id = $_POST['id'];
                $post = update('posts', $id, $post);
            // $post = selectOne('posts', ['id' => $id]);
                header('location: ' . BASE_URL . 'admin/posts/index.php');
            }
    }
    //     $last_row = selectOne('users', ['id' => $id]);
}else{
    $title = '';
    $content = '';
    $publish = isset($_POST['publish']) ? 1 : 0;
    $topic = '';
}
    //     $last_row = selectOne('users', ['id' => $id]);

if ($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['pub_id'])){
    $id = $_GET['pub_id'];
    $publish = $_GET['publish'];

    $postid = update('posts', $id, ['status' => $publish]);

    header('location: ' . BASE_URL . 'admin/posts/index.php');
    exit();
}

// Удаление категории
if ($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('posts', $id);
    header('location: ' . BASE_URL . 'admin/posts/index.php');
}