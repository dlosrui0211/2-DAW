<?php

$numeros = array(5,10,4,54,23);
$mayor=$numeros[0];
$menor=$numeros[0];

for ($j=0; $j < count($numeros); $j++){
    if($numeros[$j] > $mayor){
        $mayor = $numeros[$j];
    }
}

echo "El número mas grande es el {$mayor} <br>";

for ($j=0; $j < count($numeros); $j++){
    if($numeros[$j] < $menor){
        $menor = $numeros[$j];
    }
}

echo "El número mas chico es el {$menor}";

?>