<?php
if (!isset($_POST['siguiente']) && !isset($_POST['siguiente2'])){
?>

<form action="" method="post">
        Nombre: <input type="text" name="nombre" value="<?php if (!empty($_POST['nombre'])) echo $_POST['nombre']; ?>">
        Apellidos: <input type="text" name="apell" value="<?php if (!empty($_POST['apell'])) echo $_POST['apell']; ?>">
        <?php
        if(isset($_POST['cancelar'])){
        ?>
        <input type="hidden" name="direccion" value="<?php echo $_POST['direccion'];?>">
        <input type="hidden" name="tarjeta" value="<?php echo $_POST['tarjeta'];?>">
        <?php
        }
        ?>
        <input type="submit" name="siguiente" value="siguiente">    
</form>
<?php
}
if (isset($_POST['siguiente'])){
?>
<form action="" method="post">

    Dirección: <input type="text" name="direccion" value="<?php if (!empty($_POST['direccion'])) echo $_POST['direccion']; ?>">
    nº tarjeta: <input type="number" name="tarjeta" value="<?php if (!empty($_POST['tarjeta'])) echo $_POST['tarjeta']; ?>" >
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apell" value="<?php echo $_POST['apell']?>">
        

    <input type="submit" name="siguiente2" value="siguiente2">

</form>
<form action="" method="post">
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apell" value="<?php echo $_POST['apell']?>">
    <input type="submit" value="atras" name="atras">
</form>
<?php
}
if(isset($_POST['siguiente2'])){
    echo "Nombre : ".$_POST['nombre']."<br>"; 
    echo "Apellidos : ".$_POST['apell']."<br>";
    echo "Direccion : ".$_POST['direccion']."<br>";
    echo "Nº Tarjeta : ".$_POST['tarjeta']."<br>";


?>
<button><a href="">confirmar</a></button>

<form action="" method="post">
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apell" value="<?php echo $_POST['apell']?>">
    <input type="hidden" name="direccion" value="<?php echo $_POST['direccion']?>">
    <input type="hidden" name="tarjeta" value="<?php echo $_POST['tarjeta']?>">
    
    <input type="submit" name="cancelar" value="cancelar">

</form>
<?php
}
?>