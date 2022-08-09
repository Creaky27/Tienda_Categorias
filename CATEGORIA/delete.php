<?php
require_once("../lib/functions.php") ;

$id = $_GET['id'];

delete_categorie($coonnect, $id);

header("Location: categorias.php");
?>