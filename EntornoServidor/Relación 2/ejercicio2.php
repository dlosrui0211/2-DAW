<?php


$persona = array("nombre" => "Juan","edad"=> 25,"ciudad"=> "Madrid");



echo "Nombre: ".$persona["nombre"]." y la ciudad ".$persona["ciudad"]."<br>";

array_push($persona, "profesion", "ingeniero");

print_r($persona);




?>