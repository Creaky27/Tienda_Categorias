<?php
require_once("functions.php");

$nombre = $_POST['categorias'];
$estatus = $_POST['estatus'];
$user_id = $_POST['user_id'];

insertar_categorie($nombre, $estatus, $user_id);

header("location: categorias.php");
?>