<?php
include 'Database/studentManagement.php';

$instance = new Student();
$students = $instance->get_Students();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1 style="text-align:center;" >PHP database</h1>

    <a href=""></a>
    <div class="container">
        <div style="display: flex;list-style-type:none;" class="heading" >
        <li class="ms-5" > <strong>Name</strong> </li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="ms-5" > <strong>Age</strong> </li>&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="ms-5" > <strong>Year</strong> </li>
        </div>
        <div class="data">
            <?php foreach ($Students as $index => $student): ?>
            <li> <?php echo $student['name']; ?> </li>
            <li> <?php echo $student['age']; ?> </li>
            <li> <?php echo $student['year']; ?> </li>


            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>