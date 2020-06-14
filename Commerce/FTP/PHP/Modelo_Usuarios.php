<?php
require_once('ConexionaDB.php');


class Usuario extends DBAbstractModel {
public $id;

	public function ComprobarLogin($usuario,$contrasena) {
		 if($usuario != '' && $contrasena != '') 
		 {
		 $this->query = "SELECT id
		 FROM usuarios
		 WHERE usuario = '$usuario' AND password = '$contrasena' AND activo = 1";
		
		 $this->get_results_from_query();
	//	 var_dump($this->rows);
				 if(count($this->rows) == 1) 
				 {
					 foreach ($this->rows[0] as $propiedad=>$valor) {
					 $this->$propiedad = $valor;
					 }
					 $this->mensaje = 'Usuario encontrado';
				 } 
				 else {
							$this->mensaje = 'Usuario no encontrado';
				 }
		}
		else
		{
			$this->mensaje = 'Usuario y contraseña no ingresados';
		}
	}

	
}


?>