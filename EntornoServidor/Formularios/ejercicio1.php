<?php

$esvalido = false;
if (isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['apell']) && !empty($_POST['modulos'])){
        $esvalido = true;
    }

}


if($esvalido){
    echo "Nombre: ".$_POST['nombre']."<br>";
    echo "Apellidos: ".$_POST['apell']."<br>";
    echo "Modulos: <br> ";
    foreach($_POST['modulos'] as $valor){
        echo $valor."<br>";
    }
    echo '<br> <a href="">Volver al formulario</a>';
}else {


?>

<form action="" method="post">
        Nombre: <input type="text" name="nombre" value="<?php if (!empty($_POST['nombre'])) echo $_POST['nombre']; ?>"><?php if(empty($_POST['nombre']) && isset($_POST['enviar'])) echo "<span style = color:red>El nombre no debe de estar en blanco</span>"?><br><br>
        Apellidos: <input type="text" name="apell" value="<?php if (!empty($_POST['apell'])) echo $_POST['apell']; ?>"><?php if(empty($_POST['apell']) && isset($_POST['enviar'])) echo "<span style = color:red>El apellido no debe de estar en blanco</span>"?>
        <br><br>
        modulos: <?php if(empty($_POST['modulos']) && isset($_POST['enviar'])) echo "<span style = color:red>Debes elegir al menos un modulo</span>"?>
        <br>
        <input type="checkbox" name="modulos[]" value="DWES" <?php if(isset($_POST['modulos']) && in_array("DWES", $_POST['modulos'])) echo "checked"; ?>>Desarrollo web entorno servidor <br><br>
        <input type="checkbox" name="modulos[]" value="DWEC" <?php if(isset($_POST['modulos']) && in_array("DWEC", $_POST['modulos'])) echo "checked"; ?>> Desarrollo web entorno cliente<br><br>
        <input type="checkbox" name="modulos[]" value="DIW" <?php if(isset($_POST['modulos']) && in_array("DIW", $_POST['modulos'])) echo "checked"; ?>>Desarrollo interfaces web <br><br>

        <input type="submit" name="enviar" value="Enviar">    
</form>

<?php
}