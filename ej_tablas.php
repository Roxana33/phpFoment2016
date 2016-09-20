<html>
<head>
<title>Ejercicio tablas</title>
</head>
<body>
<?php
class Celda {
	private $texto;
	private $colorFuente;
	private $colorFondo;
}

public function _constructor($texto, $colorFuente, $colorFondo) {

	$this->texto=$texto;
	$this->colorFuente=$colorFuente;
	$this->colorFondo=$colorFondo;
}

public function graficar() {
	echo "<td style='color:'" '.$this->colorFuente .'; background-color: .$this->colorFondo>. $this->texto </td>"; 
}

?>
</body>
</html>