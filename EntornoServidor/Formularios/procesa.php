<?php

echo "Datos recibidos <br>";
if (isset($_POST['enviar'])){
    echo "Nombre: ".$_POST['nombre']."<br>";
    
    echo "Apellidos: ".$_POST['apell']."<br>";
    echo "Modulos: <br> ";
    foreach($_POST['modulos'] as $valor){
        echo $valor."<br>";
    }
    
    $nom = $_POST['nombre'];
    $apell = $_POST['apell'];
}else {
    echo "Datos no enviados";
    echo "<br> <a href=datos.php>datos</a><br>";
}



?>
