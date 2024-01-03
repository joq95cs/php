<?php 

class Sim {

private $id;
private $nombre;
private $edad;
private $ciudad;
private $empleo;

public function __construct($id, $nombre, $edad, $ciudad, $empleo) {

    $this->id = $id;
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->ciudad = $ciudad;
    $this->empleo = $empleo;
}

public function getID() {

    return $this->id;
}

public function getNombre() {

    return $this->nombre;
}

public function getEdad() {

    return $this->edad;
}

public function getCiudad() {

    return $this->ciudad;
}

public function getEmpleo() {

    return $this->empleo;
}

public function getInfo() {

    return $this->nombre . ' tiene ' .  $this->edad . ', vive en ' . $this->ciudad . ' y trabaja como ' . $this->empleo;
}
}