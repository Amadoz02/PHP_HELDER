<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db->getConexion();

$id = $_GET['id'];

$sql = "SELECT * FROM USUARIOS WHERE id_user = :id";
$stm = $conexion->prepare($sql);
$stm->bindParam(':id', $id);
$stm->execute();
$usuario = $stm->fetch(PDO::FETCH_ASSOC);

$sqlGenero = "SELECT * FROM GENEROS";
$banderag = $conexion->prepare($sqlGenero);
$banderag->execute();
$generos = $banderag->fetchAll();

$sqlCiudad = "SELECT * FROM CIUDADES";
$banderac = $conexion->prepare($sqlCiudad);
$banderac->execute();
$ciudades = $banderac->fetchAll();
?>

<form action="actualizar.php" method="post">
    <input type="hidden" name="id_user" value="<?= $usuario['id_user'] ?>">
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>">
    </div>
    <div>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="<?= $usuario['apellido'] ?>">
    </div>
    <div>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" value="<?= $usuario['correo'] ?>">
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="<?= $usuario['fecha_nacimiento'] ?>">
    </div>
    <div>
        <label for="fk_id_genero">Género:</label>
        <select name="fk_id_genero">
            <?php foreach ($generos as $genero) { ?>
                <option value="<?= $genero['id_genero'] ?>" <?= ($genero['id_genero'] == $usuario['fk_id_genero']) ? 'selected' : '' ?>>
                    <?= $genero['nom_genero'] ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div>
        <label for="fk_id_ciudad">Ciudad:</label>
        <select name="fk_id_ciudad">
            <?php foreach ($ciudades as $ciudad) { ?>
                <option value="<?= $ciudad['id_ciudad'] ?>" <?= ($ciudad['id_ciudad'] == $usuario['fk_id_ciudad']) ? 'selected' : '' ?>>
                    <?= $ciudad['nom_ciudad'] ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <button type="submit">Actualizar</button>
</form>
