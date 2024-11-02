<?php

// Arrays 

// $estudiantes = array('Carlos', 'José', 'María', 'Luis');
$estudiantes = ['Carlos', 'José', 'María', 'Luis'];

echo"<pre>";
// var_dump($estudiantes);
print_r($estudiantes);
echo"</pre>";

echo $estudiantes[2];

//Arrays asociativos

$instructor = [
  'nombre' => 'Breyner',
  'Apellido' => 'Acosta',
  'edad' => 17,
  'deudas' => '300.000.00'
];

echo "<pre>";
print_r($instructor);
echo "</pre>";

$tutor = [
  'nombre' => 'Breyner',
  'Apellido' => 'Acosta',
  'edad' => 17,
  'direccion' => [
      'ciudad' => 'Bucaramanga',
      'barrio' => 'La Gloria',
      'nomenclatura' => 'Calle 16b No 7A - 02',
      'zipcode' => 680011
    ],
  'habilidades' => [
      'git', 'html', 'css', 'js', 'php', 'python', 'sql'
    ]
];

//mostrar el array
echo "<pre>";
print_r($tutor);
echo "</pre>";

//visualizar los elementos del array dentro del array
echo "<pre>";
print_r($tutor['direccion']['nomenclatura']);
echo "</pre>";

echo "<pre>";
print_r($tutor['habilidades'][4]);
echo "</pre>";

//sobreescribir un elemento
$tutor['habilidades'][3] = 'JavaScript';

echo "<pre>";
print_r($tutor['habilidades']);
echo "</pre>";

//agregar un elemento
$tutor['direccion']['departamento'] = 'Santander';

echo "<pre>";
print_r($tutor['direccion']);
echo "</pre>";

//eliminar un elemento
//unset($tutor['habilidades'][4]);

array_splice($tutor['habilidades'], 4, 1);

echo "<pre>";
print_r($tutor['habilidades']);
echo "</pre>";

//contar elementos
echo count($tutor['habilidades']);