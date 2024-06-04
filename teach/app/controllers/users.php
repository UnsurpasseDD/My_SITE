<?php
include("app/database/db.php");

$errMsg = '';

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


// Код для формы регистрации
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['button-reg'])){
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
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
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
        $errMsg = 'Не все поля заполнены!';
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            userAuth($existence);     
        }else{
            $errMsg = 'Почта или пароль введены неверно!';
        }
    }
}else{
    $email = '';
}
