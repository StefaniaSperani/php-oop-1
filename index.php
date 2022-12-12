<?php
include_once __DIR__ . '/Models/Movie.php';
$movie1 = new Movie('Matrix', 1999, 'Lorem ipsum', ['pippo', 'pluto', 'paperino']);
var_dump($movie1);




?>