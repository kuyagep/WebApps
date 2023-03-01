<?php
    session_start();
    require_once('auth.php');
    $user = new Auth();

    //Handle Registration
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == 'register' ){
        $name = $user->check_input($_POST['name']);
        $email = $user->check_input($_POST['remail']);
        $password = $user->check_input($_POST['rpassword']);
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);

        if($user->user_exist($email)){
            echo $user->showMessage('warning','This E-Mail is already registered!');
        }else{
            if($user->register($name, $email, $hash_pass)){
                echo 'register';
                $_SESSION['user'] = $email;
            }else{
                echo $user->showMessage('danger','Something went wrong! try again later!');
            }
        }

    }

    //Handle Login
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == 'login' ){
        echo $user->showMessage('danger','Something went wrong! try again later!');
    }
    
?>