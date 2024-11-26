<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db -> getConexion();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$fk_id_genero = $_POST['fk_id_genero'];
$fk_id_ciudad = $_POST['fk_id_ciudad'];
$id_leng = $_POST['id_leng'];
$sql = "INSERT INTO USUARIOS(nombre, apellido, correo, fecha_nacimiento, fk_id_genero, fk_id_ciudad) VALUES (:nombre, :apellido, :correo, :fecha_nacimiento, :fk_id_genero, :fk_id_ciudad)";


$stm = $conexion->prepare($sql);

$stm->bindParam(':nombre', $nombre);
$stm->bindParam(':apellido', $apellido);
$stm->bindParam(':correo', $correo);
$stm->bindParam(':fecha_nacimiento', $fecha_nacimiento);
$stm->bindParam(':fk_id_genero', $fk_id_genero);
$stm->bindParam(':fk_id_ciudad', $fk_id_ciudad);

$stm->execute();



$id_user = $conexion->LastInsertId();
foreach ($id_leng as $key => $value){

    
    $sql = "INSERT INTO lenguajes_usuarios(fk_id_user, fk_id_leng) VALUES (:fk_id_user, :fk_id_leng)";
    $stm = $conexion->prepare($sql);
    $stm->bindParam(':fk_id_leng', $value);
    $stm->bindParam(':fk_id_user', $id_user);
    $stm->execute();
}

?>
<h1>envio realizado con exito</h1>
<?php
header("Location: ver_usuarios.php");

?>
