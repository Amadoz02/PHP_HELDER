<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db->getConexion();

$id_user = $_POST['id_user'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$fk_id_genero = $_POST['fk_id_genero'];
$fk_id_ciudad = $_POST['fk_id_ciudad'];

$sql = "UPDATE USUARIOS SET nombre = :nombre, 
apellido = :apellido, 
correo = :correo, 
fecha_nacimiento = :fecha_nacimiento, 
fk_id_genero = :fk_id_genero, 
fk_id_ciudad = :fk_id_ciudad WHERE 
id_user = :id_user";

$stm = $conexion->prepare($sql);

$stm->bindParam(':nombre', $nombre);
$stm->bindParam(':apellido', $apellido);
$stm->bindParam(':correo', $correo);
$stm->bindParam(':fecha_nacimiento', $fecha_nacimiento);
$stm->bindParam(':fk_id_genero', $fk_id_genero);
$stm->bindParam(':fk_id_ciudad', $fk_id_ciudad);
$stm->bindParam(':id_user', $id_user);

$stm->execute();

header("Location: ver_usuarios.php");
exit();
