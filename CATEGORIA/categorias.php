<?php
require_once("../LIB/functions.php");
$name = $_POST["user"] ;
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

        <h1>Todas las Categorías</h1>
        <form id='users_id' action="envio.php" method='POST'></form>
        <select name="user" id="user">
        <option value = "0"> Seleccionar Cliente </option>
        <?php
                
                $user = "SELECT * FROM users" ;
                $resultado = mysqli_query($connect, $user) ;
                /*  BUSCADOR POR IMPLEMENTAR
                        while ($valores = mysqli_fetch_array($resultado)) {
                        echo '<option value = "'.$valores[names].'">'.$valores[names].'</option>';
                } */  
        ?>
        </select>

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

    	       categorie_table($order , $sort);
        ?>

        <h4><small><a href="insert.php">Agregar Categoria</a></small></h4>
        <h4><small><a href="#">Regresar</a></small></h4>

        </body>
</center>
</html>