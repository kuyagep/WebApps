<?php 
    session_start();
    require_once('auth.php');
    $current_user = new Auth();

    if(!isset($_SESSION['user'])){
        header('Location:../index.php');
        die;
    }

    $current_user = $_SESSION['user'];

    $data = $current_user->currentUser($email);
?>