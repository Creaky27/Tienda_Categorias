<?php
require_once("../LIB/functions.php") ;

$id = $_GET['id'];

delete_categorie($connect, $id);

header("Location: categorias.php");
?>