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

    *{
        margin-bottom: 10px;
    }
    select{
        width: fit-content;
    }
    .lenguaje{
      display: inline-block;
    }
    fieldset{
        background-color: rgba(217, 240, 240, 0.637);
    }
    .contenedor{
        display: flex;
        flex-direction: column;
    }
    .generos{
        display: flex;
        flex-direction: column;
        margin: 10px 20px;
        width: fit-content;
        height: fit-content;
        border-radius: 10px;
        background-color: rgb(195, 168, 240);
        justify-content: space-between;
        padding: 10px;

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
                        <label for="<?= $value['id_leng'] ?>" class="genero"> 
                            <?= $value['nom_lenguaje']?>
                        </label>
                        <input type="checkbox" id="<?= $value['id_leng'] ?>" value="<?= $value['id_leng']; ?>" name="id_leng[]">
                    <?php
                        }
                    ?>
                </div>
            </div>

            <button type="submit">Enviar</button>
      </form>
  </fieldset>
</body>
<?php
echo "<pre>";
print_r ($generos);
