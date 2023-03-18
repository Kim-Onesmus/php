<?php


$marks = [40, 50, 20];
$names = ['kim', 'iano'];

// add
array_push($marks, 80);
array_unshift($marks, 90);

// Remove
array_pop($marks);
array_shift($marks);

echo '<prev>';
var_dump($marks);
echo '</prev>';

// $person = [
//     'name'=> 'Kim';
//     'name'=>'Iano';
// ]


?>