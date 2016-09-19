<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Menu {
  private $enlaces=array();
  private $titulos=array();
  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }
  public function mostrar()
  {
    echo '<ul style="list-style: none;">';
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<li><a href="'.$this->enlaces[$f].'" title="'.$this->titulos[$f].'">'.$this->titulos[$f].'</a></li>';
      
    }
    echo "</ul>";
  }
}

$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->mostrar();
?>
</body>
</html>
