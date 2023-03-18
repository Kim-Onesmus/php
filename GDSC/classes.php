<?php

ini_set('display errors', 1);
ini_set('Display start up errors', 1);
error_reporting(E_ALL);


class Person{

    public string $name;
    // private int $age;
    // protected string $message;

    public function __construct($name)
    {
        // echo "GDSC Session";
        $this->name = $name;
    }
    public function getter(){
        return $this->name;
    }
    public function __destruct(){
        echo "{$this->name} is a 6 char";
        echo "{$this->name} -Destruct";
    }
};


// Inheritance
class Student extends Person{
    public string $adm;

    public function __construct($name, $adm)
    {
        $this->adm = $adm;
        parent::__construct($name);
    }
};

$student = new Student("Onesmus", "CSC/027/2020");
echo $student->getter();


$person = new Person("Kimanzi");
// echo $person->getter();

?>
