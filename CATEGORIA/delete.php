<?php
require_once("functions.php") ;

$id = $_GET['id'];

delete_categorie($coonnect, $id);

header("Location: categorias.php");
?>