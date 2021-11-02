<!DOCTYPE html>
<head></head>
<body>

<?php

   include_once('datos.php');

    $archivo = "datos.txt";

    
        if(!file_exists($archivo)){
            echo 'Archivo no encontrado';
            }
            else {
                $abrir = fopen($archivo, "a");
                foreach($datos as $dato){
                    $contenido = $dato["name"]."#".$dato["email"].PHP_EOL ;
                
                fwrite($abrir,$contenido);
               
            
            }
            fclose($abrir);
                
            }
?>

</body>
</html>