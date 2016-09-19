<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Empleado {
  private $nombre;
  private $sueldo;
  public function inicializar($nom, $sueldo)
  {
    $this->nombre=$nom;
    $this->sueldo=$sueldo;
  }
   
public function imprimir ()
  {
    if ($this->sueldo > 3000){
    	echo "Tienes que pagar ";
    	echo '<br>';
  }
  else {
  	echo "No tienes que pagar ";
  	echo '<br>';
  }

  	echo $this->nombre;
  	echo $this->sueldo;
}
}
$per1=new Empleado();
$per1->inicializar('Corina ', 3000);
$per1->imprimir();
$per1->inicializar('Victor ', 4000);
$per1->imprimir();
?>
</body>
</html>