<?php
require_once('usuarios_model.php');
require_once('shops_model.php');


/*# Traer los datos de una tienda
$tienda1 = new Shop();
$tienda1->get('99887554R');
print $tienda1->nif ." -". $tienda1->nombre . ' ' . $tienda1->ubicacion .' existe<br>';


# Traer los datos de un usuario
$tienda2 = new Shop();
$tienda2->get('99887554R');
print $tienda2->nombre . ' ' . $tienda2->apellido . ' existe<br>';*/
# Crear un nuevo usuario
$edit_shop_data = array(
	'nombre'=>'Berska',
	'tipo'=>'Ropa',
	'ubicacion'=>'calle 100',
	'codigo'=>'08027',
	'nif'=>'29887654R',
	'alta'=>'2016-09-27'
);
/*
$usuario2 = new Usuario();
$usuario2->set($new_user_data);
$usuario2->get($new_user_data['email']);
print $usuario2->nombre . ' ' . $usuario2->apellido . ' ha sido creado<br>';
# Editar los datos de un usuario existente
$edit_user_data = array(
 'nombre'=>'Gabriel',
 'apellido'=>'Lopez',
 'email'=>'marconi@mail.com',
 'clave'=>'69274'
);
/*
$usuario3 = new Usuario();
$usuario3->edit($edit_user_data);
$usuario3->get($edit_user_data['email']);
print $usuario3->nombre . ' ' . $usuario3->apellido . ' ha sido editado<br>';
# Eliminar un usuario
*/
$tienda3 = new Usuario();
$tienda3->get('29887654R');
$tienda3->delete('29887654R');
print $tienda3->nombre . ' ' . $tienda3->ubicacion . ' ha sido eliminado';
?>
