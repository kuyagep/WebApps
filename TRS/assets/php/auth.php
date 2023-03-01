<?php
require_once('config.php');

class Auth extends Database{
    //Register new user
    public function register($name, $email, $password){
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :pass)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name'=>$name,'email'=>$email,'pass'=>$password]);
        return true;
    }

    //Check if user already register
    public function user_exist($email){ 
        $sql = "SELECT email FROM users WHERE email = :email";
        $stmt =$this->conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    //Login Existing User
    public function login($email){
        $sql ="SELECT email, password FROM users WHERE email = :email AND deleted != 0";
        $stmt =$this->conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $row;
    }

    //Current User Details
    public function currentUser($email){
        $sql = "SELECT * FROM users WHERE email = :email AND deleted != 0";
        $stmt =$this->conn->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    //Forgot Password
    public function forgotPassword($token, $email){
        $sql = "UPDATE users SET token = :token, token_expire = DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE email = :email";
        $stmt =$this->conn->prepare($sql);
        $stmt->execute(['token'=>$token, 'email'=>$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $true;
    }
}
?>