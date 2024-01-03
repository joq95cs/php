<?php 

class Usuario {

	public $nombre;
	public $correo;

	function __construct($nombre, $correo) {

		$this->nombre = $nombre;
		$this->correo = $correo;

	}

	public function mostrarNombre() {

		echo 'Su nombre es: ' . $this->nombre . '<br>';

		return $this;

	}

	public function mostrarCorreo() {

		echo 'Su correo es: ' . $this->correo . '<br>';

		return $this;

	}

}

$p = new Usuario('Joqsan', 'joq95cs@gmail.com');
$p->mostrarNombre()->mostrarCorreo()->mostrarCorreo()->mostrarNombre();