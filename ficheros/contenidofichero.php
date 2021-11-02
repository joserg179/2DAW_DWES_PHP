<!DOCTYPE html>
<head></head>
<body>
<?php

$archivo = "formatos.txt";

if(!file_exists($archivo)){
echo 'Archivo no encontrado';
}
else {
    $abrir = fopen($archivo, "r");
    $contenido = fread($abrir, filesize($archivo));
    fclose($abrir);

    echo $contenido;
    
}



?>



</body>



</html>