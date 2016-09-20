<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Tabla {
  private $mat=array();
  private $cantFilas;
  private $cantColumnas;
  private $color;
  private function insertar {

  }
  private function getCantFilas(){
    return $this->cantFilas;
  }
  private function getCantColumnas(){
    return  $this->cantColumnas;
  }
  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
    
  private function cargar($fila,$columna,$valor,$texto,$colorFuente,$colorFondo)
  {
    $this->mat[$fila][$columna]=$valor;
  }
  private function inicioTabla()
  {
    echo '<table border="1">';
  }
    
  private function inicioFila()
  {
    echo '<tr>';
  }
  private function mostrar($fi,$co)
  {
    echo '<td>'.$this->mat[$fi][$co].'</td>';
  }
  private function finFila()
  {
    echo '</tr>';
  }
  private function finTabla()
  {
    echo '</table>';
  }
  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}
$secuencia = 5;
$incremento = 3;
$filas = 16;
$columnas = 15;
$colores = array("gray", "yellow", "red", "green", "blue", "white");
$tabla1=new Tabla($filas,$columnas,$color);
$random = rand(0,5);
for ($i=1; $i <= $filas ; $i++) { 
  for ($j=1; $j <= $columnas; $j++) { 
    $tabla1->cargar($i,$j,$secuencia);
    //$secuencia = $secuencia + $incremento;
    $secuencia += $incremento;
  }
}
echo $tabla1->getCantFilas()."x".$tabla1->getCantColumnas();
$tabla1->graficar();
?>

</body>
</html>