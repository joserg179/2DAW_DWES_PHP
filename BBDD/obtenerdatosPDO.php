<?php

include_once 'conexion3.php';

try {

          // Establecemos el modo de error de PDO para que salten excepciones
          $sql = "SELECT id, nombre, numero,email FROM participantes";
          $stmt = $conexion->prepare();
          $stmt->execute();

           //OPCIÓN 1 

          foreach($stmt as $row){

              echo $row['id'] . " " . $row['nombre']. " "  . $row['numero']. " " . $row['email'] ;

              echo "<br/>";

             }


          //OPCIÓN 2

            //$datos = array();

            //$datos = $stmt->fetchAll();


      } catch(PDOException $e) {

      echo "Error: " . $e->getMessage();

      }

      $conexion = null;

?>