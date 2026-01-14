<?php


$productos = array(
    "Electronica" => array(
        "Nombre" => "Portatil HP",
        "Precio" => 800,
        "Cantidad" => 15),
    "Alimentos" => array(
        "Nombre" => "Manzana",
        "Precio" => 2.50,
        "Cantidad" => 100),
    "Ropa" => array(
        "Nombre" => "Zapatillas Nike",
        "Precio" => 60,
        "Cantidad" => 25));

$contador=0;
$total=count($productos['Alimentos']);
echo "<b>Muestro solo los datos de la array alimentos y muestro nombre y precio: </b><br><br>";
foreach ($productos['Alimentos'] as $ind => $fila){
    $contador++;
    if ($contador == $total){
        break;
    }
    echo $ind.": ".$fila."<br>";

}

echo " <br><b>Muestro todos los datos de la array: </b><br>";
foreach($productos as $indc => $valor){
    echo "<br>"."<b>".$indc."</b>"."<br>";
    foreach ($valor as $key => $clave){
        echo $key.": ".$clave."<br>";
    }
}
    





?>