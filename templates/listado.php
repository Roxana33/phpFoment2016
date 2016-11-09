<?php

// include and register Twig auto-loader
include 'Twig/Autoloader.php';

include 'Miembro.php';
Twig_Autoloader::register();

$miembro = new Miembro(1, 'Cornel', 'Lopez', '1958-02-25');

try {
  // define template directory location
  $loader = new Twig_Loader_Filesystem('templates');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader);
  
  // load template
  $template = $twig->loadTemplate('listado.tmpl');

  // render template
  echo $template->render(array (
    'a' => 3, 'miembro' => $miembro
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>