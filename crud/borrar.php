<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db->getConexion();

$id = $_GET['id'];

$sql = "DELETE FROM lenguajes_usuarios WHERE fk_id_user = :id";
$stm = $conexion->prepare($sql);
$stm->bindParam(':id', $id);
$stm->execute();


$sql = "DELETE FROM USUARIOS WHERE id_user = :id";
$stm = $conexion->prepare($sql);
$stm->bindParam(':id', $id);
$stm->execute();

header("Location: ver_usuarios.php");
