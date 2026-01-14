<?php

$esvalido = false;
if (isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['apell']) && !empty($_POST['aficiones']) && !empty($_POST['sexo']) && !empty($_POST['estado-civil']) && !empty($_POST['edad']) && !empty($_POST['provincia']) && !empty($_POST['estudios'])){
        $esvalido = true;
    }

}


if($esvalido){
    echo "Nombre: ".$_POST['nombre']."<br>";
    echo "Apellidos: ".$_POST['apell']."<br>";
    echo "Edad:  ".$_POST['edad']."<br>";
    echo "Sexo: ".$_POST['sexo']."<br>";
    echo "Estado-civil: ".$_POST['estado-civil']."<br>";
    echo "aficiones: ";
    foreach($_POST['aficiones'] as $valor){
        echo $valor."<br>";
    }
    echo "estudios: ";
    foreach($_POST['estudios'] as $arg){
        echo $arg."<br>";
    }
    echo "provincia: ".$_POST['provincia']."<br>";
    echo '<br> <a href="">Volver al formulario</a>';
}else {


?>

<form action="" method="post">
        Nombre: <input type="text" name="nombre" value="<?php if (!empty($_POST['nombre'])) echo $_POST['nombre']; ?>"><?php if(empty($_POST['nombre']) && isset($_POST['enviar'])) echo "<span style = color:red>El nombre no debe de estar en blanco</span>"?><br><br>
        Apellidos: <input type="text" name="apell" value="<?php if (!empty($_POST['apell'])) echo $_POST['apell']; ?>"><?php if(empty($_POST['apell']) && isset($_POST['enviar'])) echo "<span style = color:red>El apellido no debe de estar en blanco</span>"?><br><br>
        Edad: <input type="text" name="edad" value="<?php if (!empty($_POST['edad'])) echo $_POST['edad']; ?>"><?php if(isset($_POST['enviar']) && empty($_POST['edad']) && $_POST['edad'] > 18) echo "<span style = color:red>Es menor de edad</span>"?>
        <br><br>
        sexo: <?php if(empty($_POST['sexo']) && isset($_POST['enviar'])) echo "<span style = color:red>Debes elegir el sexo</span>"?><br><br>
        <input type="radio" name="sexo" value="Hombre" <?php if(isset($_POST['sexo']) && in_array("Hombre", $_POST['sexo'])) echo "checked"; ?>>Hombre
        <input type="radio" name="sexo" value="Mujer" <?php if(isset($_POST['sexo']) && in_array("Mujer", $_POST['sexo'])) echo "checked"; ?>>Mujer
        <br><br>
        estado-civil: <?php if(empty($_POST['estado-civil']) && isset($_POST['enviar'])) echo "<span style = color:red>Debes elegir un estado civil</span>"?><br><br>
        <input type="radio" name="estado-civil" value="Soltero" <?php if(isset($_POST['estado-civil']) && in_array("Soltero", $_POST['estado-civil'])) echo "checked"; ?>>Soltero
        <input type="radio" name="estado-civil" value="Casado" <?php if(isset($_POST['estado-civil']) && in_array("Casado", $_POST['estado-civil'])) echo "checked"; ?>>Casado
        <input type="radio" name="estado-civil" value="Otro" <?php if(isset($_POST['estado-civil']) && in_array("Otro", $_POST['estado-civil'])) echo "checked"; ?>>Otro
        <br><br>
        aficiones: <?php if(empty($_POST['aficiones']) && isset($_POST['enviar'])) echo "<span style = color:red>Debes elegir al menos una aficción</span>"?>
        <br>
        <input type="checkbox" name="aficiones[]" value="Cine" <?php if(isset($_POST['aficiones']) && in_array("Cine", $_POST['aficiones'])) echo "checked"; ?>> Cine <br><br>
        <input type="checkbox" name="aficiones[]" value="Deporte" <?php if(isset($_POST['aficiones']) && in_array("Deporte", $_POST['aficiones'])) echo "checked"; ?>> Deporte <br><br>
        <input type="checkbox" name="aficiones[]" value="Lectura" <?php if(isset($_POST['aficiones']) && in_array("Lectura", $_POST['aficiones'])) echo "checked"; ?>> Lectura <br><br>
        <input type="checkbox" name="aficiones[]" value="Música" <?php if(isset($_POST['aficiones']) && in_array("Música", $_POST['aficiones'])) echo "checked"; ?>> Música <br><br>
        <input type="checkbox" name="aficiones[]" value="TV" <?php if(isset($_POST['aficiones']) && in_array("TV", $_POST['aficiones'])) echo "checked"; ?>> TV <br><br>
        estudios: <?php if(empty($_POST['estudios']) && isset($_POST['enviar'])) echo "<span style = color:red>Debes elegir al menos un estudio</span>"?>
        <br>
        <select name="estudios[]" multiple>
            <option value="ESO" <?php if(isset($_POST['estudios']) && in_array("ESO", $_POST['estudios'])) echo "selected"; ?>>ESO</option>
            <option value="Bachillerato" <?php if(isset($_POST['estudios']) && in_array("Bachillerato", $_POST['estudios'])) echo "selected"; ?>>Bachillerato</option>
            <option value="Grado Medio" <?php if(isset($_POST['estudios']) && in_array("Grado Medio", $_POST['estudios'])) echo "selected"; ?>>G.F.G.M</option>
            <option value="Grado Superior" <?php if(isset($_POST['estudios']) && in_array("Grado Superior", $_POST['estudios'])) echo "selected"; ?>>G.F.G.S</option>
            <option value="Universidad" <?php if(isset($_POST['estudios']) && in_array("Universidad", $_POST['estudios'])) echo "selected"; ?>>Universidad</option>
        </select>
        <br><br>
        provincia: <?php if(empty($_POST['aficiones']) && isset($_POST['enviar'])) echo "<span style = color:red>Debes elegir al menos una provincia</span>"?>
        <br>
        <select name="provincia" id="provincia">
            <option value="default" selected disabled>Selecciona una provincia</option>
            <option value="Cordoba" <?php if(isset($_POST['provincia']) && in_array("Cordoba", $_POST['provincia'])) echo "selected"; ?>>Cordoba</option>
            <option value="Malaga" <?php if(isset($_POST['provincia']) && in_array("Malaga", $_POST['provincia'])) echo "selected"; ?>>Malaga</option>
            <option value="Jaen" <?php if(isset($_POST['provincia']) && in_array("Jaen", $_POST['provincia'])) echo "selected"; ?>>Jaen</option>
            <option value="Almeria" <?php if(isset($_POST['provincia']) && in_array("Almeria", $_POST['provincia'])) echo "selected"; ?>>Almeria</option>
            <option value="Huelva" <?php if(isset($_POST['provincia']) && in_array("Huelva", $_POST['provincia'])) echo "selected"; ?>>Huelva</option>
            <option value="Sevilla" <?php if(isset($_POST['provincia']) && in_array("Sevilla", $_POST['provincia'])) echo "selected"; ?>>Sevilla</option>
            <option value="Granada" <?php if(isset($_POST['provincia']) && in_array("Granada", $_POST['provincia'])) echo "selected"; ?>>Granada</option>
            <option value="Cadiz" <?php if(isset($_POST['provincia']) && in_array("Cadiz", $_POST['provincia'])) echo "selected"; ?>>Cadiz</option>
        </select>
        <br><br>
        <input type="submit" name="enviar" value="Enviar">    
</form>

<?php
}