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


$text= "Aa1#Bb2%";
// $exp = "/gruPO-[0-9]-ADso/i";
// $exp = "/le{1,4}r/i";
// $exp = "/le[aeiou]{1,5}r/i";
$exp = "/((?=.*[A-Z]){2,}(?=.*[a-z]){1,}(?=.*[0-9]){2,}(?=.*\W){2,})(?=.*.){8,}/";



$resul= preg_match($exp, $text, $coincidencia,PREG_OFFSET_CAPTURE);

echo "<pre>";
print_r($coincidencia);
echo "<br>";
echo 3<$resul;
echo "<br>";
if ($resul){
    print("si se valida la password");
}else{

    print("no hay suficiente seguridad");
}
echo "<pre>";