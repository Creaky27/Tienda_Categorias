<?php
require_once("../LIB/functions.php");
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
<center>
    <body>
    <h1>Categorias</h1>
    <h4><small><a href="insert.php">Agregar Categoria</a></small></h4>
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($fila = mysqli_fetch_array($categoria)){
                ?>
                <tr>
                    <td><?php echo $fila['id'];?></td>
                    <td><?php echo $fila['name'];?></td>
                    <td> <a href= "producto.php?id=<?php echo $fila ['id']?>">Productos</a></td>
                    <td> <a href= "update.php?id=<?php echo $fila ['id']?>">Editar</a></td>
                    <td> <a href= "delete.php?id=<?php echo $fila['id']?>">Eliminar</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</center>
</html>