<?php

include_once 'conexion2.php';


// Comprobar la conexión

if (!$conexion) {

die("Error en la conexión: " . mysqli_connect_error());

}


$sql = "SELECT id, nombre, numero,email FROM participantes";

// OPCIÓN 1

$resultado = $conexion->query($sql);


// OPCIÓN 2

// mysqli no usa búfer

$resultado = mysqli_query($conexion, $sql);


// OPCIÓN 3

// mysqli usando búfer

//$resultado = mysqli_query($conexion, $sql, MYSQLI_STORE_RESULT);



if ($resultado->num_rows > 0) {

// se muestra los datos de cada fila

while($partipantes = $resultado->fetch_assoc()) {

  echo "Id: " . $partipantes["id"]. " - Nombre: " . $partipantes["nombre"]. " - Número: " . $partipantes["numero"]. " - Email: " . $partipantes["email"]. "<br>";

}

} else {

echo "No hay resultados";

}

$conexion->close();


?>