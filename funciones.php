<?php
require_once("connection.php");

function get_categorie_TWO($connect){
    $consulta = "SELECT * FROM categories WHERE user_id = 2";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

function get_categorie_ONE($connect){
    $consulta = "SELECT * FROM categories WHERE user_id = 3";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
?>