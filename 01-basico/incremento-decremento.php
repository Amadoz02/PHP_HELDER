<?php 

/**
 * 
 * Operadores de incremento y decremento
 * 
 * Simbolo                 Nombre
 * ++                      Incremento
 * --                      Decremento
 * 
 * ++$variable             Pre-incremento
 * --$variable             Pre-decremento
 * 
 */

 $numero = 10;

 //primero incrementa y luego realiza la operación
 echo "Pre-Incremento ".++$numero;
 echo "<br>";

 //Primero realiza la operación y luego incrementa
 echo "Post-Incremento ".$numero++;
 
 echo "<br>";
 
 echo $numero;
 echo "<br>";
 
 //primero decrementa y luego realiza la operación
 echo "Pre-decremento ".--$numero;
 echo "<br>";
 
 //Primero realiza la operación y luego decrementa
 echo "Post-decremento ".$numero--;
 echo "<br>";
 
 $resultado = ++$numero;
 
 echo $resultado;
 
 echo "<br>";
 
 $resultado = $numero++;
 
 echo $resultado;