<form action="confirma.php" method="post">

    Nº Matricula: <input type="Number" name="matricula">
    Curso: <input type="text" name="curso">
    Precio: <input type="Number" name="precio">
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apell" value="<?php echo $_POST['apell']?>">
    
    <input type="submit" name="siguiente" value="siguiente">


</form>