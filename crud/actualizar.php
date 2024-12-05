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
$id_leng = isset($_POST['id_leng']) ? $_POST['id_leng'] : [];


try {
    $exp = '/^[a-zA-Z_\s]+$/';
    $validar_nom= preg_match($exp, $nombre, $coincidencia,PREG_OFFSET_CAPTURE);
    $validar_apell= preg_match($exp, $apellido, $coincidencia,PREG_OFFSET_CAPTURE);

    if ($nombre == null || $apellido == null || $correo == null || $fecha_nacimiento == null || $fk_id_genero == null || $fk_id_ciudad == null) {
        echo '<script>alert("Llena todos los campos necesarios con los datos indicados");</script>';
        header("Refresh: 0; url=ver_usuarios.php");
    } else if ($validar_nom && $validar_apell){
                
        $sql = "UPDATE USUARIOS SET nombre = :nombre, apellido = :apellido, correo = :correo, fecha_nacimiento = :fecha_nacimiento, fk_id_genero = :fk_id_genero, fk_id_ciudad = :fk_id_ciudad WHERE id_user = :id_user";
        $stm = $conexion->prepare($sql);

        $stm->bindParam(':nombre', $nombre);
        $stm->bindParam(':apellido', $apellido);
        $stm->bindParam(':correo', $correo);
        $stm->bindParam(':fecha_nacimiento', $fecha_nacimiento);
        $stm->bindParam(':fk_id_genero', $fk_id_genero);
        $stm->bindParam(':fk_id_ciudad', $fk_id_ciudad);
        $stm->bindParam(':id_user', $id_user);

        $stm->execute();


        $sql = "DELETE FROM lenguajes_usuarios WHERE fk_id_user = :id_user";
        $stm = $conexion->prepare($sql);
        $stm->bindParam(':id_user', $id_user);
        $stm->execute();

        // actualizar lenguajes
        foreach ($id_leng as $value) {
            $sql = "INSERT INTO lenguajes_usuarios(fk_id_user, fk_id_leng) VALUES (:fk_id_user, :fk_id_leng)";
            $stm = $conexion->prepare($sql);
            $stm->bindParam(':fk_id_leng', $value);
            $stm->bindParam(':fk_id_user', $id_user);
            $stm->execute();
            header("Location: ver_usuarios.php");
            exit();
}


        echo '<script>alert("Envío realizado con éxito");</script>';
        header("Refresh: 0; url=ver_usuarios.php");
    }else{
        
        echo '<script>alert("tu nombre o apellido no puede contener numeros y solo se admiten  ( _ )");</script>';
        header("Refresh: 0; url=ver_usuarios.php");
    }
}catch (Exception $e) {
        echo '<script>alert("Ocurrió un error: ' . $e->getMessage() . '");</script>';
        header("Refresh: 0; url=index.php");
}
