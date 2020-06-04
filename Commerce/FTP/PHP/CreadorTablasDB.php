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

$SQL = "ALTER TABLE `usuarios` CHANGE `contraseña` `password` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;";
if ($conn->query($SQL) === TRUE) {
  echo "Se cambio correctametne";
} else {
  echo "Error creating table: " . $conn->error;
}
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
