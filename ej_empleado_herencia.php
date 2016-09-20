<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
class Persona {
	protected $nombre;
	protected $edad;


private function cargar($nombre,$edad){
	$this->$nombre=nombre;
	$this->$edad=edad;
}

public function imprimir {
	echo "Tus datos personales son: ".$this->nombre.$this->edad;
 
}
}
class Empleado extends Persona {
	private $sueldo;
	private function cargarSueldo {
	$this->$sueldo=sueldo;
}
public function imprimir2 {
	echo "Tu sueldo es: ".$this->sueldo;
}
}
$pers=new Persona;
$pers->cargar('Bebe', 45);
$pers->imprimir();

$empl=new Empleado;
$empl->cargar('Victor', 33, 1500);
$empl->imprimir2();
?>
</body>
</html>