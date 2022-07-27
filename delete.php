<?php
require_once("funtions.php")

$id = $_GET['id'];

delete_categorie($id);

header("Location: categorias.php");
?>