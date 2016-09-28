<?php 
require_once('shops_model.php');

$tienda1 = new Shop();
$tienda1->get('99887554R');
print $tienda1->nif ." -". $tienda1->nombre . ' ' . $tienda1->ubicacion .' existe<br>';

$edit_shop_data = $tienda1->getRows();
print_r ('getRows');

$template = file_get_contents('/PHP/phpFoment2016/plantilla_abm.tpl');
	
	foreach ($tienda1 as $clave=>$valor) {
 		$template = str_replace('{'.$clave.'}', $valor, $template);
}
print $template;


?>