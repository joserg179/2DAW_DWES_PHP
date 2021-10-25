<html>
<head>
<?php
    include_once ('datos.php');

//Crear un array para almacenar los departamentos (únicos)
$departamentos=array();
//$contador = 0;
//Recorrer el array de empresas
    foreach($empresas as $empresa){

        //$empresa['DEPARTAMENTO'];
        // Por cada empresa pregunto si el array departamento 
        //contiene el departamento
         //Si no lo contiene se añade el departamento al array
        if(!in_array( $empresa['DEPARTAMENTO'],$departamentos)){
                //$departamentos[$contador] = $empresa['DEPARTAMENTO'];
                //$contador++;
               array_push($departamentos, $empresa['DEPARTAMENTO']); 
        }
        //Si lo contiene, no hago nada
    }// FIN DEL FOREACH

        //print_r($departamento);
    

?>
</head>
<body>
<form action="Ejercicio1.php" method="post">  

Departamento: 

<?php
echo "<select name='departamento'>";
foreach($departamentos as $departamento){
    echo "<option value='".$departamento."'>".$departamento."</option>";
}
echo "</select>";

?>

<p><input type="submit" value="Enviar" name="B1"></p>
</form>

</body>
</html>