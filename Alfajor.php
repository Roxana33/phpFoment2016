<?php
require_once ('InterfazPostre.php');

	class Alfajor implements Postre {
 		public function set_ingredientes() {
			 $this->ingredientes = array('Tapas de maizena' => 2,
			 'dulce de leche'=>'1 cda. sopera',
			 'coco rallado'=>'1 cdta. de te');
		}
 		function __construct() {
 			$this->set_ingredientes();
 		}
public function get_ingredientes(){
 		foreach($this->ingredientes as $clave=>$valor){
 			echo $clave. ' ' .$valor.'<br>';
 		}
 	}

}



$alfajor = new Alfajor();
$alfajor->set_ingredientes();
$alfajor->get_ingredientes();
?>