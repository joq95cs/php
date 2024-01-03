<?php

header('Content-Type: application/json');

$edades = array('Joqsan' => 26, 'Jader' => 20, 'Azalia' => 38, 'Kenya' => 20, 'Soanna' => 19);

$json_edades = json_encode($edades);

echo $json_edades;