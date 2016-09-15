<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
		echo "Esta es la semana " . date("W") . "<br>";
		echo "Hoy es " . date("Y/m/d") . "<br>";
		$d=mktime(11, 14, 54, 8, 12, 2014);
		echo "La fecha es " . date("Y-m-d h:i:sa", $d). "<br>";
		$d=mktime(11, 14, 54, 13, 12, 2014);
		echo "La fecha es " . date("Y-m-d h:i:sa", $d);
	?>
	</body>
	</html>	

