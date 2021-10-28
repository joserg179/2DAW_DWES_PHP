<!DOCTYPE html>
<head></head>
<body>

<?php
$baterias = array(

array("id"=>1,"codigo"=>"","tipo"=>"","modelo"=>"","carga"=>"","capacidad"=>"","ciclos"=>""),
    
array("id"=>2,"codigo"=>"","tipo"=>"","modelo"=>"","carga"=>"","capacidad"=>"","ciclos"=>""),
    
array("id"=>3,"codigo"=>"","tipo"=>"","modelo"=>"","carga"=>"","capacidad"=>"","ciclos"=>""),

array("id"=>4,"codigo"=>"","tipo"=>"","modelo"=>"","carga"=>"","capacidad"=>"","ciclos"=>"") 

);


$codigo = "";
$tipo = "";
$modelo = "";
$carga = "";
$capacidad = "";
$ciclos = "";
?>

<h1>Baterías</h1>
<form action="baterias.php" method='POST'>

CODIGO:<input type="text" id="codigo"><br>
TIPO:<select name="tipo" size="1">
<option id="tipo">Recargable</option>
<option id="tipo">No Recargable</option>    
</select><br>
MARCA MODELO:<input type="text" id="modelo"><br>
CARGA:<input type="text" id="carga"><br>
CAPACIDAD:<input type="text" id="capacidad"><br>
CICLOS DE VIDA:<input type="text" id="ciclos"><br>

<input type="button" value="Enviar">



</form>

<?php

function insertarArchivo(){

//Abrir el archivo

 $archivo = 'claves.txt';
 $abrir = fopen($archivo, 'w');


 //Información de los productos
 // Descripción precio stock

 $producto1 = 'Lavadora industrial-1500-20'.chr(13).chr(10);
 $producto2 = 'Televisión 40 pulgadas-3500-30'.chr(13).chr(10);
 $producto3 = 'Frigorífico  2 m  - 5500 - 10';

 //Enviar información de los productos

 fwrite($abrir, $producto1);
 fwrite($abrir, $producto2);
 fwrite($abrir, $producto3);

//Cerrar el archivo
 fclose($abrir);
}
?>

</body>
</html>