<?php
if (!isset($_POST['enviar'])){
?>
<form action="" method="post">
        Nombre: <input type="text" name="nombre">
        Apellidos: <input type="text" name="apell">
        <br><br>
        modulos:
        <br>
        <input type="checkbox" name="modulos[]" value="DWES">Desarrollo web entorno servidor <br><br>
        <input type="checkbox" name="modulos[]" value="DWEC"> Desarrollo web entorno cliente<br><br>
        <input type="checkbox" name="modulos[]" value="DIW">Desarrollo interfaces web <br><br>

        <input type="submit" name="enviar" value="Enviar">    
    </form>

<?php
}
if (isset($_POST['enviar'])){
    echo "Nombre: ".$_POST['nombre']."<br>";
    
    echo "Apellidos: ".$_POST['apell']."<br>";
    echo "Modulos: <br> ";
    foreach($_POST['modulos'] as $valor){
        echo $valor."<br>";
    }
    
    $nom = $_POST['nombre'];
    $apell = $_POST['apell'];
}
?>