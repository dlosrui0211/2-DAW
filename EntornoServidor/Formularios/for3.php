<?php
if(isset($_POST['siguiente2'])){
    echo "Nombre : ".$_POST['nombre']."<br>"; 
    echo "Apellidos : ".$_POST['apell']."<br>";
    echo "Direccion : ".$_POST['direccion']."<br>";
    echo "Nº Tarjeta : ".$_POST['tarjeta']."<br>";

}
?>
<button><a href="for1.php">confirmar</a></button>

<form action="for1.php" method="post">
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apell" value="<?php echo $_POST['apell']?>">
    <input type="hidden" name="direccion" value="<?php echo $_POST['direccion']?>">
    <input type="hidden" name="tarjeta" value="<?php echo $_POST['tarjeta']?>">
    
    <input type="submit" name="cancelar" value="cancelar">

</form>