<?php

$numeros = array(5,10,5,54,23);

$numerosnoduplicados = array();

foreach ($numeros as $elemento){
    if (!in_array($elemento, $numerosnoduplicados)){
        $numerosnoduplicados[] = $elemento;
    }
}
    echo "Ahora los numeros no estan duplicados: <br>";
    print_r($numerosnoduplicados);
?>