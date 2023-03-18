<?php

include 'database.php';

class Students{
    public $connection;
    public function __construct()
    {
        $conn = new db_connect();
        $this->connection = $conn->connect();
        return $this->connection;
    }
    public function get_Students(){
        $statement = $this->connection->prepare("SELECT * FROM details");
        $statement->execute();
        $students = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $students;
    }

    public function create_student($name, $age, $year){
        $statement = $this->connection->prepare("INSERT INTO details (name, age, year) VALUES ($name, $age, $year)");
        $statement->executed();
    }
};


?>