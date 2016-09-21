<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
 abstract class Persona {
 	protected $nombre;
 	protected $edad;

public function __construct($nombre,$edad) {
	$this->nombre=$nombre;
	$this->edad=$edad;
}
public function imprimir() {
	echo $this->nombre. ' ' .$this->edad;
}
}
class Empleado extends Persona {
	private $sueldo;
public function __construct($nombre,$edad,$sueldo) {
	parent::__construct($nombre,$edad);
	$this->sueldo=$sueldo;

}
public function imprimir() {
	echo $this->sueldo .' ';
	echo parent::imprimir();
	
}
}
$pers=new Persona();

$empl=new Empleado('Nicolasa', 18, 1500);
$empl->imprimir();
?>

</body>
</html>