<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('Model_Categorias.php'); 
$q = !empty(intval($_GET['q'])) ?  intval($_GET['q']) :'';

 $categorias = new CategoriaModel();

 foreach($categorias->Listar($q) as $pr): 
 $r[] = array('IdCategoria' => $pr->__GET('IdCategoria'),
 'Descripcion' => $pr->__GET('Descripcion')

); 
endforeach;


header('Content-type: application/json');

echo json_encode($r,JSON_UNESCAPED_UNICODE);


?>