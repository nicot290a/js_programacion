<?php
require_once('Modelo_Usuarios.php');
error_reporting(E_ALL); ini_set('display_errors', 1);
$usuarioobtenido = $_GET["usuario"];
$contrasenaobtenida = $_GET["contrasena"];
$usuarionuevo = new Usuario();
$usuarionuevo->ComprobarLogin($usuarioobtenido,$contrasenaobtenida);
//$usuarionuevo->ComprobarLogin("pedro","5678");
$respuesta = array();
if($usuarionuevo->id)
{
	$respuesta["estado"] = 1;
	$respuesta["id"] = $usuarionuevo->id;
	//$_SESSION["usuarios_id"] = $usuarionuevo->id;
	//echo "Usuario encontrado. ID: " . $usuarionuevo->id;
}
else
{
	$respuesta["estado"] = 0;
	$respuesta["mensaje"] = $usuarionuevo->mensaje;
	//echo $usuarionuevo->mensaje;	
}
header('Content-type: application/json');
echo json_encode($respuesta);

?>