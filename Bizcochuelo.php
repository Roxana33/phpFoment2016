<?php
require_once ('InterfazPostre.php');

class Bizcochuelo implements Postre {
 	var $ingredientes = array();

 	public function set_ingredientes() {
		 $this->ingredientes = array('harina'=>'2 tazas', 'leche'=>'1 taza',
		'azucar'=>'1 taza', 'huevo'=>1);
 	}
 	public function get_ingredientes(){
 		foreach($this->ingredientes as $clave=>$valor){
 			echo $clave. ' ' .$valor.'<br>';
 		}
 	}
}

$bizcochuelo = new Bizcochuelo();
$bizcochuelo->set_ingredientes();
$bizcochuelo->get_ingredientes();
?>
