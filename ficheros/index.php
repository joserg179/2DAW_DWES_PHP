<?php

 //Definición del nombre del archivo

 $archivo = "claves.txt";


 //Verificando la existencia del archivo

 if (!file_exists($archivo)){

    echo 'Archivo NO existe..!!';

 }else{
    
    if(filesize($archivo>0)){
    $abrir = fopen($archivo, "r");
    $contenido = fread($abrir, filesize($archivo));
    fclose($abrir);

    echo $contenido;
    
}else{
                echo 'fichero vacío';
            }
 }

?>