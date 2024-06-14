<?php
include SITE_ROOT . "/app/database/db.php";

$errMsg = [];

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
            
    if ($_SESSION['admin']){
        header('location: '. BASE_URL . 'admin/posts/index.php'); 
    }else{
         header('location: '. BASE_URL);
    }    
}

$users = selectALL('users');



// Код для формы регистрации
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['button-reg'])){
    
    
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passS = trim($_POST['second-pass']);
    $passF = trim($_POST['first-pass']);


    if ($login === '' || $email === '' || $passF === ''){
        array_push($errMsg,'Не все поля заполнены!');
    }elseif(mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg,'Придумайте длиннее логин');
    }elseif($passF !== $passS){
       array_push($errMsg,'Пароли не совпадают');
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email){
            array_push($errMsg,'Такая почта уже занята');
        }else{$pass = password_hash($passF, PASSWORD_DEFAULT);
            $user = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $user);
            $user = selectOne('users', ['id' => $id]);
            userAuth($user);
              
        }
    }
    //     $last_row = selectOne('users', ['id' => $id]);
}else{
    $login = '';
    $email = '';
}
    // $pass = password_hash($_POST['second-pass'], PASSWORD_DEFAULT);
// проверка
    // tt($post); 

// Код для формы авторизации
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['button-log'])){
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    
    if ($email === '' || $pass === ''){
        array_push($errMsg,'Не все поля заполнены!');
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            userAuth($existence);     
        }else{
            array_push($errMsg,'Почта или пароль введены неверно!');
        }
    }
}else{
    $email = '';
}


// Код добавление пользователя в админке
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-user'])){
    
    
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passS = trim($_POST['second-pass']);
    $passF = trim($_POST['first-pass']);

    if ($login === '' || $email === '' || $passF === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif(mb_strlen($login, 'UTF8') < 2){
        $errMsg = "Придумайте длиннее логин";
    }elseif($passF !== $passS){
        $errMsg = 'Пароли не совпадают';
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email){
            $errMsg = " Такая почта уже занята";
        }else{$pass = password_hash($passF, PASSWORD_DEFAULT);
            if (isset($_POST["admin"])) $admin = 1;
            $user = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $user);
            $user = selectOne('users', ['id' => $id]);
            userAuth($user);
              
        }
    }
    //     $last_row = selectOne('users', ['id' => $id]);
}else{
    $login = '';
    $email = '';
}


// Редактор users
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_id'])){
    $id = $_GET['edit_id'];
    $user = selectOne('users', ['id'=> $_GET['edit_id']]);
    
    $id = $user['id'];
    $admin = $user['admin'];
    $username = $user['username'];
    $email = $user['email'];
    // $password = $user['password'];
    
}



if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['update-user'])){

    $id = $_POST['id'];
    $email = trim($_POST['email']);
    $login = trim($_POST['login']);
    $passF = trim($_POST['first-pass']);
    $passS = trim($_POST['second-pass']);
    $admin = isset($_POST['admin']) ? 1 : 0;  

    if ($email === '' || $login === '' ){
        array_push($errMsg,'Не все поля заполнены!');
    }elseif(mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg,'Login должен быть больше 2-х символов');
    }elseif($passF !== $passS){
        $errMsg = 'Пароли не совпадают';
    }else{$pass = password_hash($passF, PASSWORD_DEFAULT);
        if (isset($_POST["admin"])) $admin = 1;
        $user = [
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $pass
        ];
                $id = $_POST['id'];
                $user = update('users', $id, $user);
            // $post = selectOne('posts', ['id' => $id]);
                header('location: ' . BASE_URL . 'admin/users/index.php');
            }
}else{
        $login = '';
        $email = '';
}
    //     $last_row = selectOne('users', ['id' => $id]);

// if ($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['pub_id'])){
//     $id = $_GET['pub_id'];
//     $publish = $_GET['publish'];

//     $postid = update('posts', $id, ['status' => $publish]);

//     header('location: ' . BASE_URL . 'admin/posts/index.php');
//     exit();
// }



// Удаление категории
if ($_SERVER['REQUEST_METHOD'] ==='GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('users', $id);
    header('location: ' . BASE_URL . 'admin/users/index.php');
}