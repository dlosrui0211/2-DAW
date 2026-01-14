<?php

$elementos= array("hola", "gente", "hola", "hola");
print_r($elementos);

$contador=0;

foreach($elementos as $valor){
    if ($valor == $elementos[0]){
        $contador++;
    }
}

echo " <br><br>La palabra ".'"'.$elementos[0].'"'." esta repetida ".$contador." veces";





?>