<?php

include_once 'datosconexion.php';


// Crear una conexion
// En la conexión, indicamos la base de datos que queremos utilizar.

$con = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BBDD);
// Comprobar la conexión
if (!$con) {
 die("Error en la conexión: " . mysqli_connect_error());
}

$nombre='';
$numero=0;
$email='sin email';

if(isset($_POST['nombre'])){
    $nombre=$_POST['nombre'];
}
if(isset($_POST['numero'])){
    $numero=$_POST['numero'];
}
if(isset($_POST['email'])){
    $email=$_POST['email'];
}


$ejecutar = "INSERT INTO participantes(nombre,numero,email) VALUES('$nombre','$numero','$email')";





?>