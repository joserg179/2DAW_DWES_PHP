<!DOCTYPE html>
<head></head>
<body>

<form action="registros2.txt" method='POST'>

<input type="submit" value="Pulsa este botón">

<?php


$archivo = 'registros2.txt';
    
if(!file_exists($archivo)){
    echo 'Archivo no encontrado';
    }
    else {
        $abrir = fopen($archivo, "r");
        
        echo 'Registro realizado el: ',date("d/m/Y - G:i:s");
       
    
    }
    fclose($abrir);
        
    

?>


</body>
</html>