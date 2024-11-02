<?php 

/**
 * Estructura condicional simple
 * 
 * if(expresion){
 *  Codigo a ejecutar
 * }
 * 
 * if (expresion):
 *  Codigo a ejecutar
 * endif;
 */

 $edad = 18;
 $saludo = "Hola Persona";

 if($edad >= 18){
  echo "Hola";
 }

 echo "<br>";
?>

<div>
  <?php if($edad >= 18): ?>
    <h1>
      <?= $saludo?>
    </h1>
  <?php endif; ?>
</div>


<!-- Realizar un programa que solicite un numero y imprima si el número solicitado es par -->

<!-- En un almacen se hace un 20% de descuento a los clientes cuya compra supere los 100 dolares, ¿Cuál será la cantidad que pagará una persona por su compra? -->

<?php
  $numeroSolicitado = 2;

  if (($numeroSolicitado % 2) == 0){
    echo "El número solicitado es par";
  }

  echo "<br>";

  $valorCompra = 1000;

  if ($valorCompra > 100){
    $valorCompra = $valorCompra - ($valorCompra * 0.2);
  }

  echo "El total a pagar es ".$valorCompra;
?>