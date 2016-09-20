<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

class Empleado {
	private $nombre;
	private $sueldo;
}

public function construct ($nombre,$sueldo=1000) {
	$this->nombre=$nombre;
	$this->sueldo=$sueldo;
}

$new = new Empleado;("Victor", 2000)

?>
</body>
</html>