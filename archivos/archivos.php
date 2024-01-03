<?php

//$resultado = file_exists('documento.txt');

//var_dump($resultado);

/*if(file_exists('documento.txt')) {

    echo 'Existe';
} else {

    echo 'No existe';
}

*/

//echo file_get_contents('documento.txt');

/*file_put_contents('documento.txt', "A Joqsan...");

file_put_contents('documento.txt', "\nLe gusta Dimash...", FILE_APPEND); //Sobreescribe el contenido

*/

/*file_put_contents('documento.txt', '');

for($i=1; $i<=10; $i++) {

    file_put_contents('documento.txt', ($i . "\n"), FILE_APPEND);
}

*/

$archivo = file('documento.txt');
echo '<pre>';
print_r($archivo);
echo '</pre>';