<?php

include_once 'datosconexion.php';

try {

$con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);

// Establecemos el modo de error de PDO para que salten excepciones

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// preparar y vincular parámetros

$stmt = $con->prepare("INSERT INTO participantes (nombre, numero,email ) VALUES (:nombre, :numero, :email)");
 $stmt->bindParam(':nombre', $nombre);
 $stmt->bindParam(':numero', $numero);
 $stmt->bindParam(':email', $email);

// establecemos los parámetros y ejecutamos para insertar

$nombre = "Marta";
$numero = 15;
$email = "marta@gmail.com";
$stmt->execute();


//insertaramos

$nombre = "Mario";
$numero = 16;
$email = "mario@gmail.com";
$stmt->execute();


//insertaramos

$nombre = "Julio";
$numero = 18;
$email = "julio@gmail.com";
$stmt->execute();


echo "Nuevas filas insertadas correctamente";

} catch(PDOException $e) {

echo "Error: " . $e->getMessage();

}

$con = null;

?>