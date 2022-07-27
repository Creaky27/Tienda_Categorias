<?php
require_once("functions.php")

$id = $_GET['id'];

delete_categorie($id);

header("Location: categorias.php");
?>