<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function cargar1()
  {
    $v1 = $_GET ["valor1"];
    $this->valor1=$v1;
   
  }
  public function cargar2()
  {
    
    $v2 = $_GET ["valor2"];
    $this->valor2=$v2;
  }
  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2; 
  }
}

class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2;
  }
}

class Modulo extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1%$this->valor2;
  }
}

$suma=new Suma();
$suma->cargar1(10);
$suma->cargar2(10);
$suma->operar();
echo 'El resultado de la suma de 10+10 es:';
$suma->imprimirResultado();

$resta=new Resta();
$resta->cargar1(10);
$resta->cargar2(5);
$resta->operar();
echo 'El resultado de la diferencia de 10-5 es:';
$resta->imprimirResultado();

$suma=new Modulo();
$suma->cargar1(8);
$suma->cargar2(3);
$suma->operar();
echo 'El resultado del módulo entre 8 y 3 es:';
$suma->imprimirResultado();

?>
</body>
</html> 