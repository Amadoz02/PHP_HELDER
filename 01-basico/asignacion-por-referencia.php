<?php

$texto = "Fundamentos de programación en PHP";

$asginacion = $texto;

$referencia = &$texto;

echo $asginacion;
echo "<br>";
echo $referencia;

$texto = "Asignación por referencia";

echo "<br>";
echo $referencia;