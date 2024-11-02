<?php

// if (isset($_REQUEST['numero']) && !empty($_REQUEST['numero'])){
//   for ($i = 1; $i <= $_REQUEST['numero']; $i++){
//     echo "$i<br>";
//   }
// }else{
//   echo "casilla vacía";
// }

$nombre = "";
$apellido = "";
$errores = [];

if (isset($_REQUEST['nombre']) && empty($_REQUEST['nombre'])){
  array_push($errores, "El campo nombre es requerido");
}

if (isset($_REQUEST['apellido']) && empty($_REQUEST['apellido'])){
  array_push($errores, "El campo apellido es requerido");
}

if (isset($_REQUEST['edad']) && empty($_REQUEST['edad'])){
  array_push($errores, "El campo edad es requerido");
}

if (isset($_REQUEST['telefono']) && empty($_REQUEST['telefono'])){
  array_push($errores, "El campo teléfono es requerido");
}

if (count($_REQUEST['checkbox']) < 2 || isset($_REQUEST['checkbox'])){
  array_push($errores, "El campo gustos es requerido, seleccione al menos 2 opciones");
}

// echo "<pre>";
// print_r($errores);
// echo "</pre>";

echo "<ul>";
for ($i=0; $i < count($errores); $i++) { 
  echo "<li>".$errores[$i]."</li>";
}
echo "</ul>";

