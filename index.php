<?php ?>

<h1>PHP</h1>
<ul>
  <li><a href="01-basico/tipos-datos.php">Tipos de datos</a></li>
  <li><a href="01-basico/variables.php">Variables</a></li>
  <li><a href="01-basico/constantes.php">Constantes</a></li>
  <li><a href="01-basico/arrays.php">Arrays (Arreglos)</a></li>
  <li><a href="01-basico/concatenacion.php">Concatenación</a></li>
  <li><a href="01-basico/operadores-aritmeticos.php">Operadores Aritméticos</a></li>
  <li><a href="01-basico/asignacion.php">Operadores de asignación</a></li>
  <li><a href="01-basico/asignacion-por-referencia.php">Asignación por referencia</a></li>
  <li><a href="01-basico/operadores-de-comparacion.php">Operadores de comparación</a></li>
  <li><a href="01-basico/operadores-logicos.php">Operadores lógicos</a></li>
  <li><a href="01-basico/incremento-decremento.php">Incremento - Decremento</a></li>
  <li><a href="01-basico/condicionales_simples.php">condicionales Simples</a></li>
  <li><a href="01-basico/condicionales_dobles.php">condicionales Dobles</a></li>
  <li><a href="01-basico/condicionales_anidados.php">condicionales Anidados</a></li>
  <li><a href="01-basico/condicionales-switch.php">condicionales Switch</a></li>
  <li><a href="01-basico/ciclos-while.php">Ciclos While</a></li>
</ul>
<br>
<br>
<br>
<br>
<form action="02-formularios/upload.php" method="post" enctype="multipart/form-data">
    <div>
      <label for="nombre">Ingrese el nombre: </label>
      <input type="text" name="nombre" id="nombre">
    </div>
    <div>
      <label for="file">seleccione su archivo</label>
      <input type="file" name="archivo" id="file" multiple>
    </div>
    <button>subir</button>
</form>

