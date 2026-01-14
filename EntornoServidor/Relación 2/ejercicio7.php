<?php



$paises = array("España", "Francia", "Italia", "Alemania", "Portugal");

unset($paises[2]);

print_r($paises);

array_pop($paises);
echo "<br><br>Eliminado el ultimo pais y enseño: <br><br> ";
print_r($paises);

?>