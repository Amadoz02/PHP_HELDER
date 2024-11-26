<?php
require('conexion.php');
$db = "";
$conexion = "";

$db = new Conexion;
$conexion = $db -> getConexion();

$sql = "SELECT * FROM CIUDADES";

$bandera = $conexion->prepare($sql);
$bandera->execute();
$ciudades = $bandera->fetchAll();

$sqlGenero = "SELECT * FROM GENEROS";
$banderag = $conexion->prepare($sqlGenero);
$banderag->execute();
$generos= $banderag->fetchAll();

$sqllenguaje = "SELECT * FROM LENGUAJES";
$banderal = $conexion->prepare($sqllenguaje);
$banderal->execute();
$lenguaje= $banderal->fetchAll();

?>



<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

fieldset {
    border: 1px solid #ccc;
    padding: 20px;
    margin: 20px;
    background-color: #fff;
    border-radius: 5px;
}

form div {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="date"],
select {
    width: calc(100% - 12px);
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.generos, .lenguajes {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.genero_contenedor {
    display: flex;
    align-items: center;
}

.genero_contenedor label {
    margin-right: 10px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
.botoncito{
    display: flex;
    width: 100px;
    height: fit-content;
    padding: 10px;
    background-color: #c4cce0;
    border: 1px solid #8292f0;
    border-radius: 10px;
}
</style>
</head> 
<body>
    <fieldset>
        <form action="envio.php" method="post">
            <div>
            <label for="nombre">Ingrese el nombre: </label>
            <input type="text" name="nombre" id="nombre">
            </div>
            <div>
            <label for="apellido">Ingrese el apellido: </label>
            <input type="text" name="apellido" id="apellido">
            </div>
            <div>
            <label for="correo">Ingrese su email: </label>
            <input type="email" name="correo" id="correo">
            </div>
            <div>
                <label for="fecha_nacimiento">Ingrese su fecha de nacimiento </label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
            </div>

            <div class="contenedor">
                <p>SELECCIONA TU GENERO</p>
                <div class="generos">
                    <?php
                    foreach ($generos as $key => $value) {
                    ?>
                    <div class="genero_contenedor">

                        <label for="<?= $value['id_genero'] ?>" class="genero"> 

                            <?= $value['nom_genero']?>

                        </label>
                        <input type="radio" id="<?= $value['id_genero'] ?>" value="<?= $value['id_genero']; ?>" name="fk_id_genero">
                    </div>
                    <?php
                        }
                    ?>
                    
                </div>
                
            </div>
            <div class="contenedor">
                <label for="fk_id_ciudad">TU CIUDAD: </label>
                <select name="fk_id_ciudad" id="fk_id_ciudad">
                    <?php
                    foreach ($ciudades as $key => $value) {
                        echo $value;
                    ?>  <option value="<?= $value['id_ciudad'] ?>">
                            <?= $value['nom_ciudad'] ?>
                        </option>
                    <?php
                        }
                    ?>
                </select>
                
            </div>
            <div class="contenedor">
            <p>TUS LENGUAJES</p>
                <div class="lenguajes">
                    <?php
                    foreach ($lenguaje as $key => $value) {
                    ?>
                    <div class="botoncito">

                        <label for="<?= $value['id_leng'] ?>" class="genero"> 
                            <?= $value['nom_lenguaje']?>
                        </label>
                        <input type="checkbox" id="<?= $value['id_leng'] ?>" value="<?= $value['id_leng']; ?>" name="id_leng[]">
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>

            <button type="submit">Enviar</button>
        </form>
        <button >
            <a href="ver_usuarios.php">Editar Data Base</a>
        </button>
    </fieldset>
</body>

