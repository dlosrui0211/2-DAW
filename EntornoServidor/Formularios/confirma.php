<?php

if(isset($_POST['siguiente'])){
    echo "Nombre : ".$_POST['nombre']."<br>";
    echo "Apellidos : ".$_POST['apell']."<br>";
    echo "Nº matricula : ".$_POST['matricula']."<br>";
    echo "Curso : ".$_POST['curso']."<br>";
    echo "Precio : ".$_POST['precio']."<br>";

    echo "<a href=ej1.php>volver al primer formulario</a>";
}




?>