<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

final class Persona{
	protected $nombre;
	protected $edad;
	public final function cargar($nombre,$edad){
		$this->nombre=$nombre;
		$this->edad=$edad;
	}
	public function imprimir(){
		echo $this->nombre.' '. $this->edad;
	}
}
class Empleado extends Persona{
	private $sueldo;
	public function cargarSueldo($nombre,$edad,$sueldo){
		parent::cargar($nombre,$edad);
		$this->sueldo=$sueldo;
		
	}
	public function imprimir(){
		parent::imprimir();
		echo $this->sueldo;

	}
}
$pers=new Persona;
$pers->cargar('Victor',50);
$pers->imprimir();
$empl=new Empleado;
$empl->cargarSueldo('Petre',40,1500);
$empl->imprimir()
?>
</body>
</html>