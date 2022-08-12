<?php
require_once("../LIB/functions.php");
$categoria = get_all_categories($connect);

// Ascendente
if(isset($_POST['ASC']))
{
    $asc_query = "SELECT * FROM categories ORDER BY name ASC";
    $result = executeQuery($asc_query);
}

// Descendente
elseif (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM categories ORDER BY name DESC";
          $result = executeQuery($desc_query);
    }
    
    // ID Order
    elseif (isset ($_POST['DESC'])) 
    {
          $asc_query = "SELECT * FROM categories ORDER BY id ASC";
          $result = executeQuery($asc_query);
    }
    
    // Default Order
 else {
        $default_query = "SELECT * FROM categories";
        $result = executeQuery($default_query);
}
function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "elorigin_unid");
    $result = mysqli_query($connect, $query);
    return $result;
}

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
    <form action="categorias.php" method="post">
         
         <input type="submit" name="ASC" value="Ordenar A-Z"><br><br>
         <input type="submit" name="DESC" value="Ordenar Z-A"><br><br>
         <input type="submit" name="ASC_ID" value="Ordenar por ID"><br><br>

        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row['0'];?></td>
                    <td><?php echo $row['1'];?></td>
                    <td> <a href= "producto.php?id=<?php echo $row ['id']?>">Productos</a></td>
                    <td> <a href= "update.php?id=<?php echo $row ['id']?>">Editar</a></td>
                    <td> <a href= "delete.php?id=<?php echo $row['id']?>">Eliminar</a></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </body>
</center>
</html>