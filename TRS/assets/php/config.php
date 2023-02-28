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
                $this->conn = new PDO($dsn, $this->username, $this->password, $options);
                // echo "Connected!";
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), (int)$e->getCode());
            }
        }

        //Check Input
        public function check_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;

        }

        //Error Success Message Alert
        public function showMessage($type, $message){
                return '<div class="alert alert-'.$type.' alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong class="text-center">'.$message.'</strong>

                </div>';
        }


    }

    
?>