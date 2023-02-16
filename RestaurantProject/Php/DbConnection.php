<?php 
    Class DbConnection {
        private $server = "localhost";
        private $username = "root";
        private $password;
        private $conn = null;
        private $database = "restaurantwebsite";

        public function connect(){
            try {
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            }catch(Exception $ex){
                return "Connection failed".$ex->getMessage();
            }
        }
    }
?>