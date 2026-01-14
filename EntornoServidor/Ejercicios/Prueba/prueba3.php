<?php



$cursos = array(
    "DAW" => array(
        "DWES" => "Desarrollo web en entorno servidor", 
        "DWEC"=>"Desarrollo cliente",
        "DIW"=>"Diseño",
        "OPT"=>"Optativa"),
    "DAM"=>array(
        "DI"=>"Dise",
        "Android"=>"ProAndo",
        "Windows"=>"ProWin",
        "OPT"=>"OptativaDAM"),
);

foreach ($cursos as $ind=>$fila){
    echo $ind."<br>";
    foreach ($fila as $indc=>$valor){
        echo $indc."=".$valor."<br>";
    }
}




?>