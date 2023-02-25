<?php
require_once('config.php');

class Auth extends Database{
    //Register new user
    public function register($name, $email, $password){
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :pass)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name'=>$name, 'email'=>$email, 'pass'=>$password]);
        return true;
    }
}
?>