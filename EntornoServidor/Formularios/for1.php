<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for2.php" method="post">
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
</body>
</html>