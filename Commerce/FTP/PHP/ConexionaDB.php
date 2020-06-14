<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
abstract class DBAbstractModel {
 private static $db_host = 'localhost';
 private static $db_user = 'c1590108_db';
 private static $db_pass = '04fipuVAvo';
 protected $db_name = 'c1590108_db';
 
 protected $query;
 protected $rows = array();
 private $conn;
 public $mensaje = 'Hecho';
 # métodos abstractos para ABM de clases que hereden
 //abstract protected function ComprobarLogin($usuario,$contraseña);

 # los siguientes métodos pueden definirse con exactitud y
 # no son abstractos


 # Conectar a la base de datos
private function open_connection() {
 $this->conn = new mysqli(self::$db_host, self::$db_user,self::$db_pass, $this->db_name);
 
 if ($this->conn -> connect_errno) {
  echo "Falló la conexión a MySQL: " . $mysqli -> connect_error;
  exit();
}
 
 //var_dump($this->conn);
 
	/*	 if (!$this->conn) {
			echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
			echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
			echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}*/
}
# Desconectar la base de datos
private function close_connection() {
$this->conn->close();
}
/*
# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
protected function execute_single_query() {
 if($_POST) {
 $this->open_connection();
 $this->conn->query($this->query);
 $this->close_connection();
 } else {
 $this->mensaje = 'Metodo no permitido';
 }
}
*/
# Traer resultados de una consulta en un Array
protected function get_results_from_query() {
 $this->open_connection();
//var_dump($this);
 //echo "test7";
 
 $result = $this->conn->query($this->query);
 //$result = $this->conn->query($SQL);
 // echo mysqli_error($this->conn);
 //var_dump($result);
// print_r($result);
//$this->rows[0]["id"] = 1;	
 while ($this->rows[] = $result->fetch_assoc());

 //$result->close();
 $this->close_connection();
 array_pop($this->rows);
}
}
?>