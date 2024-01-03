<?php

abstract class Persona { //No es como Java

	public function saluda() {

		return 'Hola a todos...';

	}

}

//No se puede acceder a ella directamente, solo a sus hijos

class Estudiante extends Persona {
	
}

abstract class Maestro extends Persona {

}

class Tutor extends Maestro {

}

$t = new Tutor;

echo $t->saluda();