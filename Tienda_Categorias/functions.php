<?php
require_once("connection.php");

function get_all_categories($connect){
    $consulta = "SELECT * FROM categories";
    $resultado = mysqli_query($connect,$consulta);
    return $resultado;
}

function insertar_categorie($name, $status, $user_id){
    global $connect;
    $consulta = "INSERT INTO categories (name, status, user_id) values ('$name', '$status', '$user_id')";
    $resultado = mysqli_query($connect, $consulta);
}






function delete_categories($id){
    global $connect;
    $consulta = "DELETE FROM categories WHERE id = $id";
    $resultado = msqli_query($connect, $consulta);
}
?>