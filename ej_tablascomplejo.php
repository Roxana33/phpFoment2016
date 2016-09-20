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
  private function getCantFilas(){
    return $this->cantFilas;
  }
  private function getCantColumnas(){
    return  $this->cantColumnas;
  }
  public function __construct($fi,$co,$color)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
    $this->color=$color;
  }
  private function cargar($fila,$columna,$valor)
  {
    $this->mat[$fila][$columna]=$valor;
  }
  private function inicioTabla()
  {
    echo '<table style="color" . $this->color
      border="1">';
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
$color = "red";
$tabla1=new Tabla($filas,$columnas, $color);

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