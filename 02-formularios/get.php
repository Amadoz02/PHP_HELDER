<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formularios get</title>
  <style>
    label,input,button{
      display: block;
      margin-bottom:10px;
    }

    .lenguaje{
      display: inline-block;
    }
  </style>
</head>
<body>
  
  <form action="controlador.php" method="post">
    <div>
      <label for="nombre">Ingrese el nombre: </label>
      <input type="text" name="nombre" id="nombre">
    </div>
    <div>
      <label for="apellido">Ingrese el apellido: </label>
      <input type="text" name="apellido" id="apellido">
    </div>
    <div>
      <label for="edad">Ingrese su edad: </label>
      <input type="number" name="edad" id="edad">
    </div>
    <div>
      <label for="telefono">Ingrese el teléfono: </label>
      <input type="text" name="telefono" id="telefono">
    </div>
    <div>
      <label for="html" class="lenguaje">HTML: </label>
      <input type="checkbox" name="checkbox[]" id="html" class="lenguaje" value="html">
    </div>
    <div>
      <label for="css" class="lenguaje">CSS: </label>
      <input type="checkbox" name="checkbox[]" id="css" class="lenguaje" value="css">
    </div>
    <div>
      <label for="js" class="lenguaje">JavaScript: </label>
      <input type="checkbox" name="checkbox[]" id="js" class="lenguaje" value="js">
    </div>

    <button type="submit">Enviar</button>
  </form>

</body>
</html>