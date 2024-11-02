<?php

/**
 * 
 * Estructura
 * if(?){
 *  if(?){
 *    codigo a ejecutar
 *  }else{
 *    codigo a ejecutar
 *  }
 * }
 * 
 */

  $a = 2;
  $b = 3;
  $c = 10;

 if ($a > $b) {
  if ($a > $c){
    echo "El número mayor es ".$a;
  }else{
    echo "El número mayor es ".$c;
  }
 }else{
  if ($b > $c){
    echo "El número mayor es ".$b;
  }else{
    echo "El número mayor es ".$c;
  }
 }

 echo "<hr><br>";

 $numero = 1;

 if ($numero == 1){
   echo "El número corresponde al día Lunes";
 }
 else if ($numero == 2){
   echo "El número corresponde al día Martes";
   
 }
 else if ($numero == 3){
   echo "El número corresponde al día Miércoles";
   
 }
 else if ($numero == 4){
   echo "El número corresponde al día Jueves";
   
 }
 else if ($numero == 5){
   echo "El número corresponde al día Viernes";
   
 }
 else if ($numero == 6){
   echo "El número corresponde al día Sábado";
   
 }
 else if ($numero == 7){
   echo "El número corresponde al día Domingo";
   
 }
 else {
   echo "Número incorrecto";
 }