<?php
if (!isset($_POST['siguiente']) && !isset($_POST['siguiente2'])){
?>
<form action="" method="post">
    Nombre: <input type="text" name="nombre">
    Apellidos: <input type="text" name="apell">
    <br><br>
    <input type="submit" name="siguiente" value="siguiente">    
</form>
<?php
}
if (isset($_POST['siguiente'])){
?>
<form action="" method="post">

    Nº Matricula: <input type="Number" name="matricula">
    Curso: <input type="text" name="curso">
    Precio: <input type="Number" name="precio">
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apell" value="<?php echo $_POST['apell']?>">
    
    <input type="submit" name="siguiente2" value="siguiente2">
</form>
<?php
}
if (isset($_POST['siguiente2'])){
    echo "Nombre : ".$_POST['nombre']."<br>";
    echo "Apellidos : ".$_POST['apell']."<br>";
    echo "Nº matricula : ".$_POST['matricula']."<br>";
    echo "Curso : ".$_POST['curso']."<br>";
    echo "Precio : ".$_POST['precio']."<br>";

    echo "<a href=''>volver al primer formulario</a>";
}

?>