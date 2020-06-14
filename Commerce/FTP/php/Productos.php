<?php
class Categoria
{
    private $IdProducto;
    private $Descripcion;
    private $Precio;
    private $CategoriaID;
   

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}
?>