<?php

    class Database{
       
        // Set database credentials
        private $host = "localhost";
        private $dbname = "webapps_db";
        private $username = "root";
        private $password = "";

        public $conn;

        public function __construct(){
            // Create a PDO instance with secure options
            try {
                $options = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                );
                
                $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
                $pdo = new PDO($dsn, $this->username, $this->password, $options);
                echo "Connected!";
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }


    }

    $ob = new Database();
    $next_video = "https://www.youtube.com/watch?v=4TWqnhYZ7LM&list=PL6u82dzQtlfso5EG5cHd3C56uB6IeZpxJ&index=3";
?>