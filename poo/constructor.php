<?php

class Persona {

	private $nombre;
	private $edad;
	private $pais;

	function __construct($nombre, $edad, $pais) {

		//echo 'hola';
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pais = $pais;

	}

	public function setNombre($nombre) {

		$this->nombre = $nombre;

	}

	public function setEdad($edad) {

		$this->edad = $edad;

	}

	public function setPais($pais) {

		$this->pais = $pais;

	}

	public function getNombre() {

		return $this->nombre;

	}

	public function getEdad() {

		return $this->edad;

	}

	public function getPais() {

		return $this->pais;

	}

	public function getInfo() {

		return 'Nombre: ' . $this->getNombre() . '<br>Edad: ' . $this->getEdad() . '<br>País: ' . $this->getPais() . '<br>';

		//echo $this->getPais();

	}

}

$p1 = new Persona('Kimera Castle', 52, 'Nación Sim');

echo $p1->getInfo();

$p1->setNombre('Emma Del Solar');

$p1->setEdad(46);

echo $p1->getInfo();
