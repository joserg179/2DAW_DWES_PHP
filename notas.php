<!DOCTYPE html>
<head></head>
<body>
<?php
$alumnos = array(

array("id"=>1,"alumno"=>"Luz Lázaro","promedio"=>array(5,6,7,8)),

array("id"=>2,"alumno"=>"Ángela Torres","promedio"=>array(5,6,7,8)),

array("id"=>3,"alumno"=>"Fernanda Lázaro","promedio"=>array(5,6,7,8)),

array("id"=>4,"alumno"=>"Manuel Torres","promedio"=>array(5,6,7,8)),

array("id"=>5,"alumno"=>"Lucero Mendoza","promedio"=>array(5,6,7,8)),

array("id"=>6,"alumno"=>"Alejandra Menor","promedio"=>array(5,6,7,8)),

array("id"=>7,"alumno"=>"Victoria Bautista","promedio"=>array(5,6,7,8)),

array("id"=>8,"alumno"=>"Francisco Malaver","promedio"=>array(5,6,7,8))

);

$id = '';
$alumno = '';
$promedio = '';

foreach($alumnos as $alumno){

    if(isset($_POST['Nº Orden'])){

        $id = $_POST['Nº Orden'];
    }
    
    if(isset($_POST['Alumno'])){
    
        $alumno = $_POST['Alumno'];
    }
    
    if(isset($_POST['Promedio'])){
    
        $promedio = $_POST['Promedio'];
    }

}

function calcularAlumnos($id){

}

function calcularAprobados($alumno){

}

function calcularDesaprobados($alumno){

}

function calcularMedia($alumno,$promedio){

}

?>

<form action="notas.php" method='POST'>

<table border="1">
<tr>
<th>Nº Orden</th>
<th>Alumno</th>
<th>Promedio</th>
</tr>
<tr>  
<th>1</th> 
<th>Luz Lázaro</th>  
<th>17</th>   
</tr>
<tr>
<th>2</th>   
<th>Ángela Torres</th> 
<th>18</th>    
</tr>
<tr>
    <th>3</th>   
    <th>Fernanda Lázaro</th> 
    <th>20</th>     
    </tr>
<tr>
<tr>
    <th>4</th>    
    <th>Manuel Torres</th> 
    <th>19</th>   
</tr>    
    <th>5</th>    
    <th>Lucero Mendoza</th>
    <th>14</th>    
</tr>
<tr>
    <th>6</th>   
    <th>Alejandra Menor</th>
    <th>16</th>    
</tr>
<tr>
    <th>7</th>    
    <th>Victoria Bautista</th>   
    <th>12</th> 
</tr>
<tr>
    <th>8</th>    
    <th>Francisco Malaver</th>  
    <th>11</th>  
</tr>
</table>

<input type="submit" value="MOSTRAR RESUMEN">

</body>
</html>