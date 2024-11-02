<?php

/**
 * Una farmacia aplica al precio de los remedios el 10% de descuento hacer un programa 
 * que ingresando el costos de los medicamentos calcule el descuento y el precio final
 */

$precio = 4000;
$porcentajeDescuento = 0.1;

function obtenerDescuento($precio, $porcentajeDescuento)
{
  return $precio * $porcentajeDescuento;
}

function total($precio, $descuento)
{
  return $precio - $descuento;
}

$descuento = obtenerDescuento($precio, $porcentajeDescuento);
$totalPagar = total($precio, $descuento);

echo "El descuento es de: $ ".$descuento;
echo "<br>";
echo "El total a pagar es de: $ ".$totalPagar;