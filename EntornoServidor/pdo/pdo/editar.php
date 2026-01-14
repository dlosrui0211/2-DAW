<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        $msg="";
        try {
            $opciones=array(PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,PDO::ATTR_CASE=>PDO::CASE_LOWER);
            $conex= new PDO('mysql:host=localhost;dbname=dwes;charset=utf8mb4','dwes','abc123.',$opciones);
            if (isset($_GET['cod'])){
                $cod=$_GET['cod'];
                $result=$conex->prepare("SELECT *, PVP as precio FROM producto where cod = :cod");
                $result->bindParam(":cod", $cod);
                $result->execute();
                $datos=$result->fetch();
            } else {
                echo "No se ha encontrado ningun producto";
            }
        } catch (Exception $ex) {
            $msg="Error en la base de datos";
        }
    ?>
    <div id="encabezado">     
        <h1>Tarea: Listado de productos de una familia</h1>
    </div>

    <div id="contenido">
        <?php 
            if($msg){
                echo $msg;
            } else { 
        ?>
        <form action="" method="post">
            <h1>Producto:</h1> <br><br>
            Nombre Corto: 
            <input type="text" name="nombre_corto" style="width: 260px;"  value="<?php echo $datos->nombre_corto ?>"> <br>
            Nombre: 
            <input type="text" name="nombre" value="<?php echo $datos->nombre ?>"> <br>
            Descripcion: <br>
            <textarea name="descripcion" style="width: 574px; height: 223px;"><?php echo $datos->descripcion ?></textarea> <br>
            PVP:
            <input type="Number" name="precio" value="<?php echo $datos->precio ?>">
            <br><br>
            <input type="submit" name="cancelar" value="Cancelar">
            <input type="submit" name="actualizar" value="Actualizar">
        <?php 
            if (isset($_POST['cancelar'])){
                header("Location: listado.php");
                exit;
            }

            if (isset($_POST['actualizar'])){
                $result=$conex->prepare(
                    "UPDATE producto set
                    nombre_corto = :nombre_corto,
                    nombre = :nombre,
                    descripcion = :descripcion,
                    PVP = :precio
                    WHERE cod = :cod
                ");

                $result->bindParam(":nombre_corto", $_POST['nombre_corto']);
                $result->bindParam(":nombre", $_POST['nombre']);
                $result->bindParam(":descripcion", $_POST['descripcion']);
                $result->bindParam(":precio", $_POST['precio']); 
                $result->bindParam(":cod", $_GET['cod']);                
                $result->execute();
                $datos=$result->fetch();

                header("Location: listado.php?mensaje=actualizado");
                exit;
            }
        ?>
        </form>
        <?php 
            } 
        ?>

    </div>
</body>
</html> 