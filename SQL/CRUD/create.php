<?php
    
    include("conexion.php");
    $con=conectar();

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $tipoPrincipal=$_POST['tipoPrincipal'];
    $tipoSecundario=$_POST['tipoSecundario'];

    $sql="INSERT INTO ind_pokemon VALUES('$id','$nombre','$tipoPrincipal','$tipoSecundario')";
    $query= mysqli_query($con,$sql);

    if($query){
        header("location: index.php");
    }else{
        
    }
?> 

