<?php

class Persona {

	protected $nombre;
	protected $edad;
	protected $pais;

	function __construct($nombre, $edad, $pais) {

		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->pais = $pais;

	}

	public function getNombre() {

		return $this->nombre;
	}

	public function getEdad() {

		return $this->edad;
	}

}

class Estudiante extends Persona {

	protected $carrera;

	function __construct($nombre, $edad, $pais, $carrera) {

		parent::__construct($nombre, $edad, $pais);
		$this->carrera = $carrera;

	}

	public function getCarrera() {

		return $this->carrera;

	}

	public function getPais() {

		return $this->pais;
	}

}

$persona = new Estudiante('Joq', 25, 'México', 'ISC');

echo $persona->getCarrera();