<?php

$json_objeto = '{"Soanna": 19, "Joqsan": 26, "Kenya": 15, "Jader": 20}';

$objeto = json_decode($json_objeto, true);

foreach($objeto as $key => $value) {

    echo "$key => $value <br>";
}