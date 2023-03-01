<?php
    session_start();

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

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
       $email = $user->check_input($_POST['femail']);

       $user_found = $user->currentUser($email);

       if($user_found != null){
        $token = uniqid();
        $token = str_shuffle($token);

        $user->forgotPassword($token,$email);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = Database::USERNAME;
            $mail->Password = Database::PASSWORD;
            $mail->Port = 465;
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPSecure ='ssl';
            
            $mail->isHTML(true);
            $mail->setFrom(Database::USERNAME, 'WebApps');
            $mail->addAddress($email);

            
            $mail->Subject = 'Password Reset | WebApps';
            $mail->Body    = '<h3>Click the below link to reset your password.</h3> <br>
                              <a class="btn btn-primary" href="http://localhost/WebApps/TRS/reset-pass.php?email='.$email.'&token='.$token.'">http://localhost/WebApps/TRS/reset-pass.php?email='.$email.'&token='.$token.'</a>
                              <br> Regards <br> WebApps';
            $mail->send();
            echo $user->showMessage('success','We have you the reset link in your e-mail id, please check you e-mail!');

        } catch (Exception $e) {
            echo $user->showMessage('danger','Something went wrong please try again later!');
        }
       }else {
        echo $user->showMessage('info','This E-mail is not registered!');
       }
    }
    
?>