<?php
function obtenerTiposBateria(){

$conexion = obtenerconexion();

$tipos;

$sql = 'SELECT id,nombre FROM tipobaterias';
$stmt = $conexion->prepare($sql);
$stmt->execute();

foreach($stmt as $row){
    $tipos() = $row;
}

}

function obtenerTodasBaterias(){

$baterias




}



?>