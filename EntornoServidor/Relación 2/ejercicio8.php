<?php

$edades= array(20,30,40,25);

$clave = array_search(25,$edades);
if ($clave !== false){
    echo "El valor 25 esta en {$clave}ª posición";
} else {
    echo "El mensaje indicado no se encontró";
}


?>