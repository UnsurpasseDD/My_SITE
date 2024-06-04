<?php
include ("../../app/database/db.php");

$errMsg = '';
$id = '';
$name = '';
$description = '';
$topics = selectALL('topics');


// Форма создание категории
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['topic-create'])){
    
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    


    if ($name === '' || $description === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif(mb_strlen($name, 'UTF8') < 2){
        $errMsg = "Придумайте длиннее категорию";
    }else{
        $existence = selectOne('topics', ['name' => $name]);
        if (!empty($existence['name']) && $existence['name'] === $name){
            $errMsg = " Такая категория уже есть";
        }else{
            $topic = [
    
                'name' => $name,
                'description' => $description
                
            ];
            $id = insert('topics', $topic);
            $topic = selectOne('topics', ['id' => $id]);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
    }
    //     $last_row = selectOne('users', ['id' => $id]);
}else{
    $name = '';
    $description = '';
}


// Редактор категории
if ($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id'=> $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}



if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['topic-edit'])){
    
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    


    if ($name === '' || $description === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif(mb_strlen($name, 'UTF8') < 2){
        $errMsg = "Придумайте длиннее категорию";
    }else{
            $topic = [
    
                'name' => $name,
                'description' => $description
                
            ];
            $id = $_POST['id'];
            $topic_id = update('topics', $id, $topic);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
}
    //     $last_row = selectOne('users', ['id' => $id]);



// Удаление категории
if ($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('topics', $id);
    header('location: ' . BASE_URL . 'admin/topics/index.php');
}