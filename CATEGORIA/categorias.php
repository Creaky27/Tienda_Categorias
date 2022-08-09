<?php
require_once("../LIB/functions.php");
$categoria = get_all_categories($connect);

$mysqli = NEW MySQLi('localhost', 'root', '', 'elorigin_unid');



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
       
        <?php
        
                if(isset($_GET['order'])){
                $order = $_GET['order'];
                }else{
                        $order = 'name';
                }
                if(isset($_GET['sort'])){
                        $sort = $_GET['sort'];
                }else{
                        $sort = 'ASC' ;
                }
                
                $resultSet = $mysqli->query("SELECT * FROM categories ORDER BY $order $sort");


    	        if($resultSet->num_rows > 0){
                        $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC' ;

                        echo"
                        
                        <table border='2'>
                        <thead>
                                <tr>
                                <th><a href='?order=id&&sort=$sort'>ID↑↓</a></th>
                                <th><a href='?order=name&&sort=$sort'>Nombre↑↓</a></th>
                                </tr>
                        </thead>
                        ";
                        while($rows = $resultSet->fetch_assoc())
                        {
                                $asset_num = $rows['id'];
                                $sort = $rows['name'];
                                $getID = $rows['id'] ;
                                
                                echo"
                                        <tr>
                                        <td> $asset_num </td>
                                        <td> $sort </td>
                                        <td> <a href= '#'>Productos</a></td>
                                        <td> <a href= 'update.php?id=$getID'>Editar</a></td>
                                        <td> <a href= 'delete.php?id=$getID'>Eliminar</a></td>
                                        </tr>
                                ";
                        }
                        echo "
                        </table>
                        ";
                        }else{
                                echo "No records returnes.";
                        }
        ?>
</body>
</center>
</html>