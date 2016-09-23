
<?php
require 'interfaces.php';

class Coche implements Encendible{ 
   	private $gasolina; 
   	private $bateria; 
   	private $estado = "apagado"; 

   	function __construct(){ 
      	$this->gasolina = 0; 
      	$this->bateria = 10; 
   	} 

   	public function encender(){ 
      	if ($this->estado == "apagado"){ 
         	if ($this->bateria > 0){ 
            	if ($this->gasolina > 0){ 
               	$this->estado = "encendido"; 
               	$this->bateria --; 
               	echo "<br><b>Enciendo...</b> estoy encendido!"; 
            	}else{ 
               	echo "<br>No tengo gasolina"; 
            	} 
         	}else{ 
            	echo "<br>No tengo batería"; 
         	} 
      	}else{ 
         	echo "<br>Ya estaba encendido"; 
      	} 
   	} 
   	public function getBateria(){
   		return $this->bateria;
   	}

   	public function apagar(){ 
      	if ($this->estado == "encendido"){ 
         	$this->estado = "apagado"; 
         	echo "<br><b>Apago...</b> estoy apagado!"; 
      	}else{ 
         	echo "<br>Ya estaba apagado"; 
      	} 
   	} 

   	public function cargar_gasolina($litros){ 
      	$this->gasolina += $litros; 
      	echo "<br>Cargados $litros litros"; 
   	} 

}

$coche = new Coche;
$coche->encender();
$coche->apagar();
$coche->cargar_gasolina(5);
for($i=0;$i<11;$i++){
	$coche->encender();
	$coche->apagar();
	echo '<br>'.$coche->getBateria();
}
?>
