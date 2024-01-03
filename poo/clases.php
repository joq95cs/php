<?php 


class Persona {

	public $nombre;
	public $edad;
	public $pais;

	public function mostrarInfo() {

		echo 'Hola';

	}

	public function getNombre() { //Siempre lleva la palabra function

		return $this->nombre;
		//Si no pones this no se puede acceder, por el tema del scope
	}

	public function getEdad() {

		return $this->edad;

	}

	public function getPais() {

		return $this->pais;

	}

}

$persona = new Persona; #No lleva paréntesis del constructor

$persona->nombre = 'Joqsan';
$persona->edad = 25;
$persona->pais = 'México'; //Cuando accedes a los atributos no lleva $

/*$persona->mostrarInfo();

echo '<br>';

echo $persona->nombre . ' tiene ' . $persona->edad . ' años de edad...';

*/

echo $persona->getNombre();
echo '<br>';
echo $persona->getEdad();
echo '<br>';
echo $persona->getPais();
