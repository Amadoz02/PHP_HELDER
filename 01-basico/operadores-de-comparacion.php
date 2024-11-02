<?php
/**
 * ---- Ejemplo                  Simbolo                   Resultado
 *      1 == "1"                 == (igual)                 TRUE
 *     10 === "10"               === (identico)             FALSE
 *      7 != 7                  != (diferente)              FALSE
 *      21 <> '21'              <> (diferente)              FALSE
 *      19 !== 21               !== (no identico)           TRUE
 *        7 < 4                 < (Menor que)               FALSE
 *        7 > 4                 > (Mayor que)               TRUE
 *        2 <= 2                <= (Menor o igual que)      TRUE
 *        3 >= 7                >= (Mayor o igual que)      FALSE
 */

 var_dump(2 == "2");
 echo "<br>";
 var_dump(2 === "2");