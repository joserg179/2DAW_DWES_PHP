<?php

//Método 1: Añadiendo el archivo conexion.php que obtiene la conexión

// leyendo los datos de conexión de un fichero .ini

include_once 'conexion.php';
$config = parse_ini_file("datosconexionBD.ini");
$conexionPDO = obtenerConexionPDO($config);

try {

   $sql = "INSERT INTO participantes (nombre, numero,email) VALUES ('Luis', 23, 'luismr@ies.es')";

   // se usa exec() porque la sentencia no devuelve ningún valor

   $conexion->exec($sql);

   echo "<p>Nueva fila creada correctamente";

 } catch(PDOException $e) {

   echo $sql . "<br>" . $e->getMessage();

 }

 $conexion = null;

?>