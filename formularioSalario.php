<html>
<body>

<?php
$empleado = '';
$horas = '';
$valorhora = '';

if(isset($_POST['empleado'])){

    $empleado = $_POST['empleado'];
}

if(isset($_POST['horas'])){

    $horas = $_POST['horas'];
}

if(isset($_POST['categoria'])){

    $idCategoria = $_POST['categoria'];
}


$categorias = array(

    array("id"=>1,"nombre"=>"jefe","valor"=>60),
    
    array("id"=>2,"nombre"=>"administrativo","valor"=>30),
    
    array("id"=>3,"nombre"=>"operario","valor"=>15),

    array("id"=>4,"nombre"=>"becario","valor"=>6)

);

function calcularBruto($horas,$valorhora){

    $bruto = $horas * $valorhora;
    return $bruto;

}

function calcularDescuento($bruto,$porcentaje){

    $descuento = $bruto * $porcentaje;
    return $descuento;
}

function calcularNeto($bruto,$descuento){

    $salarioneto = $bruto - $descuento;
    return $salarioneto;
}


?>

<form action="formularioSalario.php" method="post">  

    <p> Empleado: <input type="text" name="empleado" value="<?php echo $empleado ?>"/> <br><br>
    
    Horas: <input type="text" name="horas" value="<?php echo $horas ?>"/><br>

    </p>

    <p>  

        Categoría

     <select name="categoria" size="1">  

        <?php
        foreach($categorias as $categoria){
                $seleccion = "";
                if($idCategoria==$categoria['id']){
                    $seleccion = "selected";
                    $valorhora = $categoria['selected'];
                }

         echo "<option value=''".$categoria['id']." ".$seleccion.">".$categoria['nombre'].'</option>';
    }
         
        ?>

</select> 

<?php
    echo '<p>
    Salario bruto';
    if($horas!=''){
        $bruto = calcularBruto($horas,$valorhora);
        echo $bruto,' euros';
    }else{
        echo '0 euros';
    }
    echo '</p>';

    echo '<p>
    Descuento';
    if($horas!=''){
        $descuento = calcularDescuento($bruto,0.15);
        echo $descuento,' euros';
    }else{
        echo '0 euros';
    }
    echo '</p>';

    echo '<p>
    Salario neto';
    if($horas!=''){
        $salarioneto = calcularNeto($bruto,$descuento);
        echo $salarioneto,' euros';
    }else{
        echo '0 euros';
    }
    echo '</p>'

?>


    </p>

    <p>Salario bruto </p>

    <p> Descuento </p>
    
    <p> Salario neto </p>
    

        <p><input type="submit" value="Calcular" name="B1">
        <input type="reset" value="Limpiar" name="B2"></p>
    </p>
</form>
</body>
</html>