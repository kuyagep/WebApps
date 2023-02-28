<?php

    require_once 'auth.php';
    $user = new Auth();
    if(isset($_POST['action']) && $_POST['action'] == "register"){
        $name = $user->check_input($_POST['name']);
        $email = $user->check_input($_POST['email']);
        $password = $user->check_input($_POST['password']);
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);

        if($user->user_exist($email)){
            echo $user->showMessage('warning','This E-Mail is already registered!');
        }else{
            if($user->register($name,$email,$password)){
                echo 'register';
                $_SESSION['user'] = $email;
            }
        }

    }
?>