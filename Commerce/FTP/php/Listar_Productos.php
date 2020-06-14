<?php

require_once('Model_Productos.php'); 
$q = !empty(intval($_GET['q'])) ?  intval($_GET['q']) :'';

 $productos = new ProductoModel();

 foreach($productos->Listar($q) as $pr): 
 $r[] = array('Idproducto' => $pr->__GET('Idproducto'),
 'Descripcion' => $pr->__GET('Descripcion'),
 'Precio' => $pr->__GET('Precio'),
 'CategoriaID' => $pr->__GET('CategoriaID')
 
 

); 
endforeach;






//print_r ($categorias->Listar());
header('Content-type: application/json');

echo json_encode($r,JSON_UNESCAPED_UNICODE);
//echo json_encode($Categoria->Listar());


?>