<?php

/**
 * Estructura condicional doble (if - else)
 * 
 * if (expresion){
 *  Codigo a ejecutar si la condicion es verdadera
 * }else {
 *  Codigo a ejecutar si la condicion es falsa
 * }
 * 
 * if (expresion):
 *  si es verdadera
 * else:
 *  si es falsa
 * endif;
 */

 if (1 > 7) {
  echo "Condición evalua a verdadero";
 }else {
  echo "condicion evalua a false";
 }


 echo "<hr><br>";


 if (9 == 12):
  echo "Condición evalua a verdadero";
 else:
  echo "condicion evalua a false";
 endif;


 echo "<hr><br>";
 /**Calcular el total que una persona debe pagar en un montallantas, el precio de cada llanta es 800 si se compran menos de 5 llantas y de 700 si se compran 5 o mas llantas */


 $cantidadLlantas = 10;

 if ($cantidadLlantas < 5){
    $totalPagar = $cantidadLlantas * 800;
  }else {
    $totalPagar = $cantidadLlantas * 700;
  }
  
  echo "El total a pagar es ".$totalPagar;

  echo "<hr><br>";
  /**Determinar si un alumno aprueba o reprueba un curso, sabiendo si su promedio de 3 calificaciones es mayor o igual a 3.0, de lo contrario reprueba */
  
  $calificacion1 = 3;
  $calificacion2 = 3;
  $calificacion3 = 2;
  
  $promedio = ($calificacion1 + $calificacion2 + $calificacion3)/3;
  
  if ($promedio >= 3.0){
  echo "Aprobado con promedio de ".$promedio;
}else{
  echo "Reprobado con promedio de ".$promedio;
}


echo "<hr><br>";

/** Operador ternario
 * 
 * operador ? true : false
 * 
 */

echo (8 <= 10) ? "verdadero" :"falso";
echo "<hr><br>";

$numero1 = 2;
$numero2 = 4;

echo ($numero1 > $numero2) ? $numero1 * $numero2 : $numero1 / $numero2;