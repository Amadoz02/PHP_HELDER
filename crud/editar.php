<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db->getConexion();

$id = $_GET['id'];


$sql = "SELECT * FROM USUARIOS WHERE id_user = :id";
$stm = $conexion->prepare($sql);
$stm->bindParam(':id', $id);
$stm->execute();
$usuario = $stm->fetch();


$sqlLenguajesUsuario = "SELECT fk_id_leng FROM lenguajes_usuarios WHERE fk_id_user = :id";
$stm = $conexion->prepare($sqlLenguajesUsuario);
$stm->bindParam(':id', $id);
$stm->execute();
$lenguajesUsuario = $stm->fetchAll(PDO::FETCH_COLUMN, 0);


$sqlGenero = "SELECT * FROM GENEROS";
$banderag = $conexion->prepare($sqlGenero);
$banderag->execute();
$generos = $banderag->fetchAll();


$sqlCiudad = "SELECT * FROM CIUDADES";
$banderac = $conexion->prepare($sqlCiudad);
$banderac->execute();
$ciudades = $banderac->fetchAll();


$sqllenguaje = "SELECT * FROM LENGUAJES";
$banderal = $conexion->prepare($sqllenguaje);
$banderal->execute();
$lenguajes = $banderal->fetchAll();


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
    <div class="contenedor">
        <p>TUS LENGUAJES</p>
        <div class="lenguajes">
            <?php
            foreach ($lenguajes as $value) {
            ?>
            <div class="botoncito">
                <label for="<?= $value['id_leng'] ?>" class="genero"> 
                    <?= $value['nom_lenguaje'] ?>
                </label>
                <input type="checkbox" id="<?= $value['id_leng'] ?>" value="<?= $value['id_leng'] ?>" name="id_leng[]" <?= in_array($value['id_leng'], $lenguajesUsuario) ? 'checked' : '' ?>>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <button type="submit">Actualizar</button>
</form>
<?php
