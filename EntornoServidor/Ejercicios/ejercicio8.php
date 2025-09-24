<?php

$contador = 0;


for ($j = 1 ; $j <= 100; $j++){
    if ($j % 2 == 0){
        echo "<br>".$j;
        $contador = $contador + $j;
    }
    
}

echo "<br>"."<br>"."La suma de los numeros pares es: ".$contador;



?>