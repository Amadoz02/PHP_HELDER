<?php

function tablaMultiplicar($tabla)
{
  echo "Tabla de multiplicar del $tabla:";
  echo "<br>";
  for ($i=1; $i < 11; $i++) { 
    echo "$tabla * $i = ".$tabla*$i;
    echo "<br>";
  }
}

for ($tabla=1; $tabla < 11; $tabla++) {

  tablaMultiplicar($tabla);

}
