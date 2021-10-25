<html>
<head></head>
<body>  

<?php
$idProducto = "";
$precio = "";
$cantidad = "";
$valorproducto = 0;
$producto = "";

if(isset($_POST['producto'])){

    $idProducto = $_POST['producto'];
}

if(isset($_POST['cantidad'])){

    $cantidad = $_POST['cantidad'];
}


$productos = array(

array("id"=>1,"nombre"=>"Lavadora","valor"=>200),

array("id"=>2,"nombre"=>"Frigorífico","valor"=>350),

array("id"=>3,"nombre"=>"Lavavajillas","valor"=>150),

array("id"=>4,"nombre"=>"Tostadora","valor"=>20)

);

?>

<form action="formularioVenta.php" method="post">
<select name="producto" size="1">  
Productos
        <?php

        foreach($productos as $producto){
                $seleccion = "";
                if($idProducto==$producto['id']){
                    $seleccion = "selected";
                    $valorproducto = $producto['selected'];
                }  
                      
         echo "<option value=''".$producto['id']." ".$seleccion.">".$producto['nombre'].'</option>';
            }

?>
</select>
<br>

    Precio: <input type="text" name="precio"  value="<?php echo $valorproducto?> ?>"/><br>
    
    Cantidad: <input type="text" name="cantidad" value="<?php echo $cantidad?>"/><br>

    Total: <input type="text" name="total" value="<?php echo $cantidad?>"/><br>

    Cuotas: <select name="cuotas" size="1"> 
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>  

    <p><input type="submit" value="Calcular" name="B1">

<?php
    if($cantidad>0){
        echo '<input type="submit" value="Calcular" name="B1">';
    }
    else{
        echo '<p><input type="submit" value="Obtener precio" name="B1">';
    }

?>

    <p><input type="reset" value="Limpiar" name="B2"></p>

</form>
</body>
</html>