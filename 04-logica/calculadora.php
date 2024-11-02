<?php

$num1 = 5;
$num2 = "perro";

function calculadora($num1, $num2) 
{
  try {
    
    if($num2 === 0){
      throw new Exception("No se puede dividir por cero.");
    }
    
    else if (!is_numeric($num1) || !is_numeric($num2)){
      throw new Exception("Alguno o ambos números no son numéricos");
    }

    $respuestas = array(
      'suma' => $num1 + $num2,
      'resta' => $num1 - $num2,
      'multiplicacion' => $num1 * $num2,
      'division' => $num1 / $num2
    );
    return $respuestas;

  } catch (Exception $e) {
    return $e->getMessage();
  }

}

$resultado = calculadora($num1, $num2);

echo "<pre>";
print_r($resultado);
echo "<pre>";