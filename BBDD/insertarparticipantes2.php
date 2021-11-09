<?php

include_once 'datosconexion.php';


// Crear una conexion
// En la conexión, indicamos la base de datos que queremos utilizar.

$con = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BBDD);
// Comprobar la conexión
if (!$con) {
 die("Error en la conexión: " . mysqli_connect_error());
}

// preparar y vincular
$stmt = $con->prepare("INSERT INTO participantes (nombre, numero, email ) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $nombre, $numero, $email);


// establecemos los parámetros y ejecutamos

$nombre = "José";
$numero = 9;
$email = "jose@yahoo.es";

$stmt->execute();

$nombre = "Julia";
$numero = 10;
$email = "julia@yahoo.es";

$stmt->execute();

$nombre = "Pedro";
$numero = 12;
$email = "pedro@yahoo.es";

$stmt->execute();

echo "Las filas se han insertado correctamente";


$stmt->close();

$con->close();

?>