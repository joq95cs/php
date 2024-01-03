<?php 

class Usuario {

	private $nombre;

	function __construct($nombre) {

		$this->nombre = $nombre;

	}

	protected function saluda() {

		return 'Hola: ' . $this->nombre;

	}

}

class Miembro extends Usuario {

	public function hola($edad) {

		return $this->saluda() . ' tienes ' . $edad . ' años de edad...';

	}

}

$u = new Miembro('Joqsan');

echo $u->hola(30);

 ?>