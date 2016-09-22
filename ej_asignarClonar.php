<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

class Cuadrado{
	private $lado;
	public function cargar($lado){
		$this->lado=$lado;
	}
	public function devolver(){
		return $this->lado;
	}
	public function cargar2($superficie){
		return $this->lado*$this->lado;
	}
	public function devolver2(){
		return $this->superficie;
	}
}

$cuadrado=new Cuadrado();
$cuadrado->cargar(4);
$cuadrado->cargar2(6);
$x=$cuadrado;
$x=imprimir();




?>
</body>
</html>