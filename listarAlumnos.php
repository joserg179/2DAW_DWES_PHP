<!DOCTYPE html>
<head></head>
<body>

<?php
    include_once "notas.php";

    $id = '';
    $alumno = '';
    $promedio = '';
    $nota = '';  
    $media = '';

function mostrarTablaAlumnos($alumnos){

    echo '<table>';
    echo '<tr>';
        echo '<td>Id</td><td>Alumno</td><td>Promedio</td>';
        echo '<tr>';
      foreach($alumnos as $alumno){
        foreach($alumno("notas") as $notas){
            $total = $notas;
        }
        $total = $total / count($alumno["notas"]);
        echo '<tr>';
        echo '<td>'.$alumno["id"],'</td><td>'.$alumno["nombre"],'</td><td>';
        echo '</tr>';
      }  
    }

 function calcularMedia($nota){



 }   




?>






</body>


</html>