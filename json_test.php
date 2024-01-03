<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$json = '{

    "nombre": "Sims 4",
    "estudio": "EA Games",
    "agno": 2014
}';

$json_array = json_decode($json, true);

echo json_encode($json_array);