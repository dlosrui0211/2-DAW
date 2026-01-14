<?php



$colores = array("rojo", "azul", "verde", "amarillo");


echo "El primer color es ".$colores[0]."<br>";
echo "El tercer color es ".$colores[2]."<br>"."<br>";

$colores[]= "naranja";

$cantidad_elementos = count($colores);

echo "Elementos que forman parte de la array"."<br>"."<br>";

for ($j= 0; $j < $cantidad_elementos; $j++ ){
    echo $colores[$j]."<br>";
}

?>