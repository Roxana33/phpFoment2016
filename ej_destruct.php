<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class Ejercicio{
	public function construct(){
		echo 'Soy el construct';
	}
	
	public function __destruct(){
		echo 'Soy el destruct';
	}
}
$ej=new Ejercicio();





?>
</body>
</html>