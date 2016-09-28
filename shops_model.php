<?php 
require_once ('db_abstract_model.php');

class Shop extends DBAbstractModel{
	protected $idShop;
	public $nombre;
	public $tipo;
	public $ubicacion;
	public $codigo;
	public $nif; 
	public $alta;
	private $idUser;

function __construct() {
 		$this->db_name = 'book_example';
 	}
 public function getRows{
 	return $this->rows;
 }
 public function get($nif='') {
 	if($nif != ''):
		 $this->query = "
		 SELECT idShop, nombre, tipo, ubicacion, codigo, nif, alta, idUser
		 FROM shops
		 WHERE nif = $nif
		 ";
		 $this->get_results_from_query();
 	endif;
 		if(count($this->rows) == 1):
	 		foreach ($this->rows[0] as $propiedad=>$valor):
	 			$this->$propiedad = $valor;
		 	endforeach;
	 	endif;
 	}

public function set($shop_data=array()) {
 		if(array_key_exists('nif', $shop_data)):
 			$this->get($shop_data['nif']);
 		if($shop_data['nif'] != $this->nif):
 		foreach ($shop_data as $campo=>$valor):
 			$$campo = $valor;
 		endforeach;
			$this->query = "
			 INSERT INTO shops
			 (idShop, nombre, tipo, ubicacion, codigo, nif, alta, idUser)
			 VALUES
			 ('$idShop', '$nombre', '$tipo', '$ubicacion', '$codigo', '$nif', '$alta', '$idUser')
			 ";
			 $this->execute_single_query();
 		endif;
 		endif;
 }
public function edit ($shop_data=array()) {
 		$this->get($shop_data['nif']);
 		if($shop_data['nif'] = $this->nif){
	 		foreach ($shop_data as $campo=>$valor):
	 			$$campo = $valor;
	 		endforeach;
	 		$this->query = "
			 UPDATE shops
			 SET nombre='$nombre',
			 tipo='$tipo',
			 ubicacion='$ubicacion'
			 codigo = '$codigo'
			 nif = 'nif'
			 alta = 'alta'
			 idUser = 'idUser'
			 WHERE nif = '$nif'
			 ";
	 		$this->execute_single_query();	
 		}
 		else { 
 			echo'Nada';
 		}	
 	}
public function delete($nif='') {
 		if(!empty($nif)){
 			$this->get($nif);
 			if($this->nif==$nif){
			 	$this->query = "
				DELETE FROM shops
				WHERE nif = '$nif'
				 ";
				$this->execute_single_query();
			}
 		else {
 			'El nif no existe';
 		}
 	}
 }	
 
}
?>