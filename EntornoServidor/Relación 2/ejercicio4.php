<?php


$animales= array("gato","perro","elefante","jirafa");
echo "La cuenta del array normal: <br>";
var_dump(count($animales));

array_push($animales, "pato", "tigre");
echo "<br><br>Cuando añades los dos animales: "."<br>";
var_dump(count($animales));


?>