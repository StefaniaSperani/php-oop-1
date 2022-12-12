<?php
include_once __DIR__ . '/Models/Movie.php';
$movie1 = new Movie('Film1', 1999, ['action', 'fantasy'], 'Lorem ipsum dolor sit amet consectetur', ['pippo', 'pluto', 'paperino']);
var_dump($movie1);

echo $movie1->getDescription();
echo '<br>';
echo $movie1->getInfo();

$movie2 = new Movie('Film2', 2020, ['horror', 'thriller'], 'Quas quam voluptates deserunt ipsam?');
var_dump($movie2);

echo $movie2->getDescription();
echo '<br>';
echo $movie2->getInfo();



?>