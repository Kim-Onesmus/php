<?php

include "Database/studentManagement.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' ){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $year = $_POST["year"];

    echo $name, $age, $year ;
    $instance = new Student();
    $instance->create_student($name, $age, $year);
}
// echo '<prev>';
// var_dump ($_SERVER);
// echo '</prev>';


?>


<h1>Create Student</h1>



<form method="POST">
    <input type="text" name="name" placeholder="name"> <br><br>
    <input type="number" name="age" placeholder="age"> <br><br>
    <input type="number" name="year" placeholder="year"> <br><br>

    <button type="submit">Submit</button>
</form>