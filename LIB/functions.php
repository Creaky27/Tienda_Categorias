<?php
require_once("connection.php");

function get_all_categories($connect){
    $consulta = "SELECT * FROM categories";
    $resultado = mysqli_query($connect,$consulta);
    return $resultado;
}
function get_categorie($connect, $id){
    $consulta = "SELECT * FROM categories WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

function insertar_categorie($name, $status, $user_id){
    global $connect;
    $consulta = "INSERT INTO categories (name, status, user_id) values ('$name', '$status', '$user_id')";
    $resultado = mysqli_query($connect, $consulta);
}
function update_categorie($name, $status, $user_id, $id){
    global $connect;
    $consulta = "UPDATE categories SET name='$name', status='$status', user_id='$user_id' WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

function delete_categorie($connect, $id){
    global $connect;
    $consulta = "DELETE FROM categories WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
}
?>