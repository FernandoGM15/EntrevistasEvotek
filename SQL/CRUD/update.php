 
<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$tipoPrincipal=$_POST['tipoPrincipal'];
$tipoSecundario=$_POST['tipoSecundario'];

$sql="UPDATE ind_pokemon SET nombre='$nombre' , tipoPrincipal='$tipoPrincipal', tipoSecundario='$tipoSecundario' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
 