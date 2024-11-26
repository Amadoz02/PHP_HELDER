<?php
require('conexion.php');

$db = new Conexion;
$conexion = $db->getConexion();
echo "Usuarios";

$sql = "SELECT u.id_user, u.nombre AS usuario_nombre, u.apellido, u.correo, u.fecha_nacimiento, g.nom_genero AS genero_nombre, c.nom_ciudad AS ciudad_nombre, GROUP_CONCAT(l.nom_lenguaje SEPARATOR ', ') AS lenguajes
        FROM USUARIOS u 
        INNER JOIN GENEROS g ON u.fk_id_genero = g.id_genero 
        INNER JOIN CIUDADES c ON u.fk_id_ciudad = c.id_ciudad
        LEFT JOIN lenguajes_usuarios lu ON u.id_user = lu.fk_id_user
        LEFT JOIN LENGUAJES l ON lu.fk_id_leng = l.id_leng
        GROUP BY u.id_user";

$bandera = $conexion->prepare($sql);
$bandera->execute();
$USUARIOS = $bandera->fetchAll();
?>
<style>
    .datos{
        width: fit-content;
        padding: 5px 10px;
    }
    *{
        font-family: Georgia, 'Times New Roman', Times, serif;

    }
    button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Fecha de Nacimiento</th>
        <th>Género</th>
        <th>Ciudad</th>
        <th>Lenguajes</th>
        <th>Acciones</th>
    </tr>
    <?php
        foreach ($USUARIOS as $key => $value) {
    ?>
            <tr>
                <td class="datos"><?=$value['usuario_nombre']?></td>
                <td class="datos"><?=$value['apellido']?></td>
                <td class="datos"><?=$value['correo']?></td>
                <td class="datos"><?=$value['fecha_nacimiento']?></td>
                <td class="datos"><?=$value['genero_nombre']?></td>
                <td class="datos"><?=$value['ciudad_nombre']?></td>
                <td class="datos"><?=$value['lenguajes']?></td>
                <td>
                    <button onclick="window.location.href='editar.php?id=<?= $value['id_user'] ?>'">Editar</button>
                    <button onclick="window.location.href='borrar.php?id=<?= $value['id_user'] ?>'">Borrar</button>
                </td>
            </tr>
    <?php } ?>
</table>
<br>
<button >
    <a href="index.php">Agregar nuevo usuario</a>
</button>
