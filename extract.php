<?php

$array = array('nombre' => 'Joqsan', 'edad' => 25);

extract($array);

//echo $nombre;

$nombre = 'So Anna';

//echo $nombre;

echo $array['nombre']; //Al extraerse no se cambia el array original