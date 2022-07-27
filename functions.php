<?php
require_once("connection.php");

function get_all_categories($connect){
    $consulta = "SELECT * FROM categories";
    $resultado = mysqli_query($connect,$consulta);
    return $resultado;
}

function insertar_categorie($nombre, $estatus, $user_id){
    $consulta = "INSERT INTO categories(name, status, user_id) values ('$nombre', '$estatus', '$user_id')";
    $resultado = mysqli_query($connect, $consulta);
    //$resultado
}






function delete_categories($id){
    global $connect;
    $consulta = "DELETE FROM categories WHERE id = $id";
    $resultado = msqli_query($connect, $consulta);
}
?>