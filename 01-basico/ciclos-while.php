<?php

// $a = 1;

// while ($a <= 10) {

//   if ($a != 8){
    
//     echo "$a <br>";
//   }
  
//   $a++;

// }

echo "<br>";

$numero = 11;
$cont = 0;

while ($cont < 10){ 

  $cont++;
  
  if (esPrimo($numero)){
    break;
  }
  
  if ($cont == 8){
    continue;
  }
    
  echo "$numero * $cont = ". $numero * $cont;
  echo "<br>";
}

function esPrimo($numero) {
  
  //mi forma de hacerlo
  
  $a = 1;
  $contador = 0;
  while ($a <= $numero){
    if ($numero % $a == 0){
      $contador++;
    }
    $a++;
  }

  if ($contador > 2){
    return false;
  }else{
    return true;
  }
}

// $primo = esPrimo(7) ? "Sí" : "No";

// echo $primo;