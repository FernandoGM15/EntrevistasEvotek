<?php

include("conexion.php");
    $con=conectar();

    $id=$_GET['id']; 

    $sql="DELETE FROM ind_pokemon WHERE id='$id'";
    $query= mysqli_query($con,$sql);

    if($query){
        header("location: index.php");
    }else{
        
    }

?>