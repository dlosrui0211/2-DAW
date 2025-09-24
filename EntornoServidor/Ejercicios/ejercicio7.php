<?php

$contador = 0;

for ($j = 1 ; $j <= 100; $j++){
    
    echo "<br>".$j;

    $contador = $contador + ($j*$j);

}

echo "<br>"."<br>"."La suma de los numeros enteros es: ".$contador;


?>