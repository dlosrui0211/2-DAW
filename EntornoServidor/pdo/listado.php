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
        $conex->beginTransaction();
        $result=$conex->query("SELECT nombre, cod from familia");
        $conex->commit();
    } catch (Exception $ex) {
        $conex->rollBack();
        $msg="Error en la base de datos";
    }
?>
<div id="encabezado">     
    <h1>Tarea: Listado de productos de una familia</h1>
    <form action="" method="post">
        Producto:
        <select name="familia"> 
            <?php
                if(!$msg){
                    while ($datos=$result->fetch()){
                        echo "<br><option value='{$datos->cod}'";
                        if((isset($_POST['familia']) && $_POST['familia'] == $datos->cod)){
                            echo "selected";
                        }
                        echo ">{$datos->nombre}</option>";
                    }
                }
            ?>
        </select>
        <input type="submit" name="MostrarStock" value="Mostrar Stock">
    </form>
</div>
<div id="contenido">
    <?php
        if (isset($_POST['MostrarStock']) && isset($_POST['familia']) && !$msg){
            echo "<h1>Productos de la familia:</h1>";
            try {
                $result=$conex->prepare("SELECT producto.id, producto.PVP as precio, producto.nombre_corto FROM producto WHERE producto.familia = :familia");
                $result->bindParam(":familia", $_POST['familia']);
                $result->execute();
                while ($datos=$result->fetch()){
                    echo "<br> Nombre: $datos->nombre_corto: $datos->precio euros";
                    echo "<a href='editar.php?id={$datos->id}'><button>Editar</button></a>";
                }
            } catch(Exception $ex){
                $msg="Error en la base de datos entre de nuevo ";
            }
            
        }
    ?>
</div>
<div id="pie">
    <?php 
        $msg=""; 
    ?>
</div>
</body>
</html>