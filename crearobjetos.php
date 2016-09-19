<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edad;
  public function inicializar($nom, $edad)
  {
    $this->nombre=$nom;
    $this->edad=$edad;
  }
   public function cumpleanos() {
    $this->edad++;
   }
   public function imprimir()
  {
    echo $this->nombre;
    echo '<br>';
    echo $this->edad;
  }
}

$per1=new Persona();
$per1->inicializar('Juan', 19);
$per1->imprimir();
$per1->cumpleanos();
$per1->imprimir();
$per2=new Persona();
$per2->inicializar('Ana', 23);
$per2->imprimir();
$per2->cumpleanos();
$per2->imprimir();
?>
</body>
</html>