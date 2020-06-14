<?php
$servername = "localhost";
$username = "c1590108_db";
$password = "04fipuVAvo";
$dbname = "c1590108_db";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/*
$SQL = "ALTER TABLE `usuarios` CHANGE `contraseña` `password` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;";
if ($conn->query($SQL) === TRUE) {
  echo "Se cambio correctametne";
} else {
  echo "Error creating table: " . $conn->error;
}*/

/*
$sql="CREATE TABLE `categorias` (
	`IdCategoria` INT(11) NOT NULL AUTO_INCREMENT,
	`Descripcion` CHAR(150) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`IdCategoria`) USING BTREE,
	INDEX `IdCategoria` (`IdCategoria`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
";
INSERT INTO productos (DESCRIPCION,PRECIO,CATEGORIAID)
VALUES ( 'TABLET SAMSUNG 10 PULGADAS',15850,2);

INSERT INTO productos (DESCRIPCION,PRECIO,CATEGORIAID)
VALUES ( 'NOTEBOOK DELL I5',75850,1);
INSERT INTO productos (DESCRIPCION,PRECIO,CATEGORIAID)
VALUES ( 'CESULAR S10',175850,3);
INSERT INTO productos (DESCRIPCION,PRECIO,CATEGORIAID)
VALUES ( 'RELOJ CASIO A CUERDA',5850,4);



*/
$sql="SHOW DATABASES";
if (($result = $conn->query($sql)) !== FALSE)
{
    echo "query success";

    while($row = $result->fetch_assoc())
    {
        print_r($row);
    }
}
else
{
    echo "query failure";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/*if ($conn->query($sql) === TRUE) {
  echo "Registros insertasdoS";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql="CREATE TABLE `productos` (
	`Idproducto` INT(11) NOT NULL AUTO_INCREMENT,
	`Descripcion` CHAR(150) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Precio` FLOAT(12) NOT NULL DEFAULT '0',
	`CategoriaID` INT(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`Idproducto`) USING BTREE,
	INDEX `FK1ProductosCategorias` (`CategoriaID`) USING BTREE,
	CONSTRAINT `FK1ProductosCategorias` FOREIGN KEY (`CategoriaID`) REFERENCES `categorias` (`IdCategoria`) ON UPDATE RESTRICT ON DELETE RESTRICT
)
COLLATE='utf8mb4_general_ci'";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/
/*
$sql = "CREATE TABLE `productos` (
	`Idproducto` INT(11) NOT NULL,
	`Descripcion` CHAR(150) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Precio` FLOAT(12) NOT NULL DEFAULT '0',
	`CategoriaID` INT(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`Idproducto`) USING BTREE,
	INDEX `FK1ProductosCategorias` (`CategoriaID`) USING BTREE,
	CONSTRAINT `FK1ProductosCategorias` FOREIGN KEY (`CategoriaID`)
   REFERENCES `categorias` (`IdCategoria`)
    ON UPDATE RESTRICT ON DELETE RESTRICT
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;";*/
/*
if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/

/*
// sql to create table
$sql = "CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql = "INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `activo`) VALUES (1, 'juan', '1234', 1);";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "ALTER TABLE `usuarios` ADD PRIMARY KEY (`id`);";
if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql = "ALTER TABLE `usuarios` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;";
if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

*/
$conn->close();
?>
