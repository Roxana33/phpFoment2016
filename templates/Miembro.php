<?php
class Miembro {
	private $id;
	private $nombre;
	private $apellido;
	private $fecha;
}

function __construct ($id, $nombre, $apellido, $fecha) {
	$this->id = $id;
	$this->nombre = $nombre;
	$this->apellido = $apellido;
	$this->fecha = $fecha;
}


public function getId(){
		return $this->id;
	}

public function setId($id){
		$this->id = $id;
	}

public function getNombre(){
		return $this->nombre;
	}

public function setNombre($nombre){
		$this->nombre = $nombre;
	}

public function getApellido(){
		return $this->apellido;
	}

public function setApellido($apellido){
		$this->apellido = $apellido;
	}

public function getFecha(){
		return $this->fecha;
	}

public function setFecha($fecha){
		$this->fecha = $fecha;
	}

?>