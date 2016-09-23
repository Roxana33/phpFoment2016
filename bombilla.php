<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require 'interfaces.php';

class Bombilla implements encendible{ 
   	public function encender(){ 
      	echo "<br>Y la luz se hizo..."; 
   	} 

   	public function apagar(){ 
      	echo "<br>Estamos a oscuras..."; 
   	} 
}

$bombilla = new Bombilla;
$bombilla>encender();
$bombilla->apagar();
?>

</body>
</html>