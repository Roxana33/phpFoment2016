<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
abstract class Trabajador{
	protected $nombre;
	protected $sueldo;
	public function __construct($nombre){
		$this->nombre=$nombre;
	}
	public abstract function calcularSueldo();
	public function imprimir{
		$this->nombre;
	}
}
class Empleado extends Trabajador{
	private $horasTrabajadas;
	private $valorHora;
	public function __construct($nombre,$horasTrabajadas,$valorHora){
		parent::__construct($nombre);
		$this->horasTrabajadas=$horasTrabajadas;
		$this->valorHora=$valorHora;
	}
	public function calcularSueldo{
		echo $this->valorHora * $this->horasTrabajadas;
	}
}
	public function imprimir{
		echo $this->nombre. ' '.$this->sueldo. ''.$this->horasTrabajadas. ''.$this->valorHora;
}
class Gerente extends Trabajador{

}

$empl=new Empleado();
$empl->calcularSueldo('Nicolasa', 3.50, 160);
$empl->imprimir();
?>
</body>
</html>