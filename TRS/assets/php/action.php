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
        
        $email = $user->check_input($_POST['email']);
        $pass = $user->check_input($_POST['password']);

        $loggedInUser = $user->login($email);
       if($loggedInUser != null){
        if(password_verify($pass, $loggedInUser['password'])){
            if(!empty($_POST['rem'])){
                setcookie("email", $email, time()+(30*24*60), '/');
                setcookie("pass", $pass, time()+(30*24*60), '/');
            }else{
                setcookie("email","",1, '/');
                setcookie("pass","",1, '/');
            }
            $_SESSION['user'] = $email;
            echo 'login';
        }else{
            echo $user->showMessage('danger','Password is incorrect!');
        }
       }else{
        echo $user->showMessage('danger',"User not found!");
       }
    }

    //Handle Forgot Password
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == 'forgot' ){
        print_r($_POST);
    }
    
?>