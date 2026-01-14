<?php


$nombres = array("Ana", "Luis", "Carlos", "Maria");


$invertida= array_reverse($nombres);

print_r($invertida);

if (in_array("Carlos", $nombres)){
    echo "<br><br> Tenemos a Carlos en la array";
}

array_push($nombres, "Juan");
echo "<br><br>Array actualizada despues de insertar a juan: <br><br> ";
print_r($nombres);





?>