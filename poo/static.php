<?php 

class Persona {

	public static $dia = '14 de Octubre';

	public static function saludo($nombre = null) { //Permite pasarle un valor por defecto

		if($nombre) {

			return 'Hola, buen día ' . $nombre;

		} else {

			return 'Hola, buen día...';

		}

	} //Igual que Java

}

echo Persona::saludo();

 ?>