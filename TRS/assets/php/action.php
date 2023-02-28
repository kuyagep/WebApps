<?php
    session_start();
    require_once 'auth.php';
    $user = new Auth();
    $name = $email = $password = '';
    if(isset($_POST['action']) && $_POST['action'] == 'register'){
        print_r($_POST);
        $name = $user->check_input($_POST['name']);
        $email = $user->check_input($_POST['email']);
        $password = $user->check_input($_POST['password']);
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);

        if($user->user_exist($email)){
            echo $user->showMessage('warning','This E-Mail is already registered!');
        }else{
            if($user->register($name,$email,$hash_pass)){
                echo 'register';
                $_SESSION['user'] = $email;
            }else{
                echo $user->showMessage('danger','Something went wrong! try again later!');
            }
        }

    }
?>