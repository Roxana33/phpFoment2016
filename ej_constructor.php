<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $color;
  public function __construct($tit,$ubi,$color)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->color=$color;
  }
  public function graficar()
  {
    echo '<div class="w3-container w3-center w3-text-$this->color $ubicacion'"'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina('El blog del programador','center', 'blue');
$cabecera->graficar();
?>
</body>
</html> 