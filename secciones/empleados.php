<?php 
include_once '../configuraciones/bdrd.php';
$conectionBD=BD::crearInstancia();
$pdo =BD::crearInstancia();
$pdo->exec("USE canfc"); //selecionamos la baase de datos



?>
