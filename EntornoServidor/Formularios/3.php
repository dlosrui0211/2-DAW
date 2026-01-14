<?php
if (isset($_POST['siguiente2'])){
    echo "Nombre : ".$_POST['nombre']."<br>"; 
    echo "Apellidos : ".$_POST['apell']."<br>";
    $idio=explode(",", $_POST['idiomas']);
    echo "idiomas:". "<br>";
    foreach ($idio as $valor){
        echo $valor."<br>";
    }
    echo "Nº Matricula: ".$_POST['matricula']. "<br>";
    echo "Curso: ".$_POST['curso']. "<br>";
    echo "Precio: ".$_POST['precio']. "<br>"; 
}
?>