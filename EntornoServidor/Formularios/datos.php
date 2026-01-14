<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="procesa.php" method="post">
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
    <!--     
    <br><a href="opciones.php?n=1">Opcion 1</a><br>
    <a href="opciones.php?n=2">Opcion 2</a><br>
    <a href="opciones.php?n=3">Opcion 3</a><br><br>
    -->
    <?php

    //var_dump($_GET);

    ?>
</body>
</html>