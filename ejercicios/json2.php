<?php

header('Content-Type: application/json');

$peliculas = array('Avengers: Endgame', 'Spider-Man: No Way Home', 'Black Widow', 'Cruella', 'Sailor Moon Crystal: Eternal');

$json_peliculas = json_encode($peliculas);

echo $json_peliculas;