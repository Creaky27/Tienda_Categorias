<?php
    require_once("funciones.php");
    
    $categoria = get_categorie_ONE($connect);

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] !=3){
            header('location: tecnologia.php');
        }
    }
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoría 2 Tecnología</title>
</head>
<body>
<h1>Categorías 2</h1>
<h2>Tecnología</h2>
<h4><small><a href="../Insertar/insert.php">Agregar Categoría</a></small></h4>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Estatus</th>
                <th>User_ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($fila = mysqli_fetch_array($categoria)){
            ?>
            <tr>
                <td><?php echo $fila['id'];?></td>
                <td><?php echo $fila['name'];?></td>
                <td><?php echo $fila['status'];?></td>
                <td><?php echo $fila['user_id'];?></td>
                <td> <a href= "#">Detalles</a></td>
                <td> <a href= "#">Editar</a></td>
                <td> <a href= "#">Eliminar</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table></body>
</html>