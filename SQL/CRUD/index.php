<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ind_pokemon";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>empleados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!--Use esta libreria de bootstrap para que se viera bonito, por eso las clases de los contendores etan extraños-->
        <link rel="shortcut icon" href="./Galarian_League.ico">
        <!--Este icono es el simnolo de la liga Pokémon de Galar-->
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Datos del Pkmn</h1>
                                <form action="create.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="Numero en la Pokédex">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="tipoPrincipal" placeholder="TipoP">
                                    <input type="text" class="form-control mb-3" name="tipoSecundario" placeholder="TipoS">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >

                                <h1>Pokédex</h1>

                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Numero</th> 
                                        <th>Nombre</th>
                                        <th>TipoP</th>
                                        <th>TipoS</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th> 
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['tipoPrincipal']?></th>    
                                                <th><?php  echo $row['tipoSecundario']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>