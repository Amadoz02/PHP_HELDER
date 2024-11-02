<?php

/**
 * 
 * Los alumnos de un curso se han dividido en 2 grupos a y b, de acuerdo con el sexo y nombre,
 * el primer grupo esta formado por las mujeres con nombres anterior a la m y los hombres con nombre posterior a la n
 * y el grupo b por el resto
 * 
 * pedir al usuario el nombre y sexo y muestre el grupo al que corresponde
*/

$nombre = 'Herminigildos';
$nombre = strtolower($nombre);
$sexo = "hombre";
$sexo = strtolower($sexo);

function grupo($nombre, $sexo)
{
  if ($nombre[0] < "m" && $sexo == "mujer" || $nombre[0] > "n" && $sexo == "hombre"){
    return "A";
  }

  else {
    return "B";
  }
}

echo "Grupo ".grupo($nombre, $sexo);