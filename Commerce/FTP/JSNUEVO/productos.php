<?php
$respuesta = array();

	$respuesta["estado"] = 1;
if($_GET["categoria"] == "celulares")
{	
	$respuesta["productos"] = array();
	$respuesta["productos"][0] = array();
	$respuesta["productos"][0]["id"] = "1";
	$respuesta["productos"][0]["nombre"] = "Celular 1";
	$respuesta["productos"][0]["precio"] = "100";

	$respuesta["productos"][1] = array();
	$respuesta["productos"][1]["id"] = "2";
	$respuesta["productos"][1]["nombre"] = "Celular 2";
	$respuesta["productos"][1]["precio"] = "200";

	$respuesta["productos"][2] = array();
	$respuesta["productos"][2]["id"] = "3";
	$respuesta["productos"][2]["nombre"] = "Celular 3";
	$respuesta["productos"][2]["precio"] = "300";
}	
else if($_GET["categoria"] == "relojes")
{	
	$respuesta["productos"] = array();
	$respuesta["productos"][0] = array();
	$respuesta["productos"][0]["id"] = "4";
	$respuesta["productos"][0]["nombre"] = "Reloj 1";
	$respuesta["productos"][0]["precio"] = "400";

	$respuesta["productos"][1] = array();
	$respuesta["productos"][1]["id"] = "5";
	$respuesta["productos"][1]["nombre"] = "Reloj 2";
	$respuesta["productos"][1]["precio"] = "500";

	$respuesta["productos"][2] = array();
	$respuesta["productos"][2]["id"] = "6";
	$respuesta["productos"][2]["nombre"] = "Reloj 3";
	$respuesta["productos"][2]["precio"] = "600";

}
else if($_GET["categoria"] == "tablets")
{	
	$respuesta["productos"] = array();
	$respuesta["productos"][0] = array();
	$respuesta["productos"][0]["id"] = "7";
	$respuesta["productos"][0]["nombre"] = "Tablet 1";
	$respuesta["productos"][0]["precio"] = "700";

	$respuesta["productos"][1] = array();
	$respuesta["productos"][1]["id"] = "8";
	$respuesta["productos"][1]["nombre"] = "Tablet 2";
	$respuesta["productos"][1]["precio"] = "800";

	$respuesta["productos"][2] = array();
	$respuesta["productos"][2]["id"] = "9";
	$respuesta["productos"][2]["nombre"] = "Tablet 3";
	$respuesta["productos"][2]["precio"] = "900";
}
	
header('Content-type: application/json');
echo json_encode($respuesta);


?>