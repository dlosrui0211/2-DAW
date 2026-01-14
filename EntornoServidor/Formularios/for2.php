<form action="for3.php" method="post">

    Dirección: <input type="text" name="direccion" value="<?php if (!empty($_POST['direccion'])) echo $_POST['direccion']; ?>">
    nº tarjeta: <input type="number" name="tarjeta" value="<?php if (!empty($_POST['tarjeta'])) echo $_POST['tarjeta']; ?>" >
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apell" value="<?php echo $_POST['apell']?>">
        

    <input type="submit" name="siguiente2" value="siguiente2">

</form>
<form action="for1.php" method="post">
    <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']?>">
    <input type="hidden" name="apell" value="<?php echo $_POST['apell']?>">
    <input type="submit" value="atras" name="atras">
</form>
