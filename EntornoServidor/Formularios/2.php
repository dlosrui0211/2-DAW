<form action="3.php" method="post">
    Nº Matricula: <input type="text" name="matricula">
    Curso: <input type="text" name="curso">
    Precio: <input type="text" name="precio">
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apell" value="<?php echo $_POST['apell']?>">
    <input type="hidden" name="idiomas" value="<?php echo implode(",", $_POST['idiomas'])?>">
    <input type="submit" name="siguiente2" value="siguiente2">  
</form>