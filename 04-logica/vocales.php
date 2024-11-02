<?php

/**
 * escriba una funcion que tome una cadena y debe retornar una nueva cadena sin las vocales
 */

$cadena = "Dylan Slebyng Bravo Becerra";

function replaceVocales($cadena)
{
  
  return preg_replace("/a|á|e|é|i|í|o|ó|u|ú/","", strtolower($cadena));

}

$solucion = replaceVocales($cadena);

echo "La cadena $cadena sin vocales es: $solucion";
