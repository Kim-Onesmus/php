<?php
    ini_set('display errors', 1);
    ini_set('Display start up errors', 1);
    error_reporting(E_ALL);

    class db_connect{

        private $db_host = 'localhost';
        private $db_name = 'Students';
        private $db_user = 'root';
        private $db_password = '';

        protected $connection = null;

        public function connect(){
            if($this->connection == null){
                try{
                    $this->connection = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_password);
                    // echo "successfull";
                }
                catch(PDOException $e){
                    die($e->getMessage());
                }

                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->connection;
            }
        }

    }

    $instance = new db_connect();
    $instance->connect();
?>