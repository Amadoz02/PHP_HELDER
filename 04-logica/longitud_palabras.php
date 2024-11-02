<?php

$palabra = "herminigildos";

function contador($palabra)
{
  if (strlen($palabra) < 5){
    return "corta";
  } else {
    return "larga";
  }
}

$resultado = contador($palabra);

echo "La palabra es $resultado";
