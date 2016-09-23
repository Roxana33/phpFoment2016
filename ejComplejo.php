<?php

abstract class SeleccionFutbol{
	protected $nombre;
	protected $apellidos;
	protected $edad;

	public function __construct($nombre,$apellidos,$edad){
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->edad = $edad;
	}
	public function getDatos(){
		return $this->nombre.$this->apellidos.$this->edad;
	}
	public function viajar(){
		echo 'Me gusta viajar';
	}
	public function concentrarse(){
		echo 'Concentrar';
	}
	abstract public function entrenamiento(){
		echo 'Entrenarse';
	}
	public function partidoFutbol(){
		echo 'Un partido';
	}
}

public class Futbolista extends SeleccionFutbol{
	private $dorsal;
	private $demarcacion;
	public 
	public function __construct($nombre,$apellidos,$edad,$dorsal,$demarcacion){
		parent::__construct;
		$this->dorsal = $dorsal;
		$this->demarcacion = $demarcacion;
	}
	public function entrenamiento(){
		echo 'Hei';
	}
	public function entrevista(){
		echo 'Hay una entrevista';
	}
}

public class Entrenador extends SeleccionFutbol{
	private $idFederacion;
	public function __construct($nombre,$apellidos,$edad,$idFederacion){
		parent::__construct;
		$this->idFederacion = $idFederacion;
	}
	public function entrenamiento(){
		echo 'Hola';
	}
	public function planificarEntrenamiento(){
		echo 'Se planifica el entrenamiento';
	}
}

public class Masajista extends SeleccionFutbol{
	private $titulacion;
	public function __construct($nombre,$apellidos,$edad,$titulacion,$aniosExperiencia){
		parent::__construct;
		$this->$titulacion = titulacion;
		$this->$aniosExperiencia = aniosExperiencia;
	}
	public function entrenamiento(){
		echo 'Cucu';
	}
	public function darMasaje(){
		echo 'Especialista en masaje';

	}
}

?>