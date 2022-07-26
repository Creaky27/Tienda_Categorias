<?php
require_once("funciones.php");
$categoria = get_all_categories($connect);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
<h1>Categorias</h1>
<h4><small><a href="../Insertar/insert.php">Agregar Categoria</a></small></h4>
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
    </table>
</body>
</html>