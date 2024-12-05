<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db->getConexion();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$fk_id_genero = $_POST['fk_id_genero'];
$fk_id_ciudad = $_POST['fk_id_ciudad'];
$id_leng = $_POST['id_leng'];

try {
    $exp = '/^[a-zA-Z_\s]+$/';
    $validar_nom= preg_match($exp, $nombre, $coincidencia,PREG_OFFSET_CAPTURE);
    $validar_apell= preg_match($exp, $apellido, $coincidencia,PREG_OFFSET_CAPTURE);

    if ($nombre == null || $apellido == null || $correo == null || $fecha_nacimiento == null || $fk_id_genero == null || $fk_id_ciudad == null) {
        echo '<script>alert("Llena todos los campos necesarios con los datos indicados");</script>';
        header("Refresh: 0; url=index.php");
    } else if ($validar_nom && $validar_apell){
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
        foreach ($id_leng as $key => $value) {
            $sql = "INSERT INTO lenguajes_usuarios(fk_id_user, fk_id_leng) VALUES (:fk_id_user, :fk_id_leng)";
            $stm = $conexion->prepare($sql);
            $stm->bindParam(':fk_id_leng', $value);
            $stm->bindParam(':fk_id_user', $id_user);
            $stm->execute();
        }
        
        echo '<script>alert("Envío realizado con éxito");</script>';
        header("Refresh: 0; url=ver_usuarios.php");
    }else{
        
        echo '<script>alert("tu nombre o apellido no puede contener numeros y solo se admiten  ( _ )");</script>';
        header("Refresh: 0; url=index.php");
    }
}catch (Exception $e) {
        echo '<script>alert("Ocurrió un error: ' . $e->getMessage() . '");</script>';
        header("Refresh: 0; url=index.php");
}

?>

