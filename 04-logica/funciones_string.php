<?php
// $text= "obscurito";
// $exp = "/ob?scuro/";
// preg_match_all($exp, $text, $coincidencia);

// echo "<pre>";
// print_r($coincidencia);
// echo "<pre>";


// $text= "prueba esto es solo una prueba, con esto esta la PRUEBA";
// $exp = "/[a-z]/";
// $resul=preg_match($exp, $text, $coincidencia);

// echo "<pre>";
// print_r($coincidencia);
// echo "</pre>";


// $text= "vamos de 1 en 2 y por si 9";
// $exp = "/[0-9]/";
// $resul= preg_match_all($exp, $text, $coincidencia,PREG_OFFSET_CAPTURE);

// echo "<pre>";
// print_r($coincidencia);
// echo "<pre>";


$text= "LeEEeR022%m";
// $exp = "/gruPO-[0-9]-ADso/i";
// $exp = "/le{1,4}r/i";
// $exp = "/le[aeiou]{1,5}r/i";
$exp = "/^((([A-Z].*){4,})+((*.[0-9].*){2,})+(*.[\W]{1,}.*))${10,}/";



$resul= preg_match($exp, $text, $coincidencia,PREG_OFFSET_CAPTURE);

echo "<pre>";
print_r($coincidencia);
echo "<br>";
echo 3<$resul;
echo "<br>";
if ($resul){
    print("si tiene 4 o  mas mayusculas");
}else{

    print("no hay suficiente cantidad de mayuzculas");
}
echo "<pre>";