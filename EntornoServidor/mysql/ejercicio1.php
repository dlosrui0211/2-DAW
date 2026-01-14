<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        $msg ="";
        try {
            $conex=new mysqli("localhost", "dwes", "abc123.", "dwes");
            $conex -> set_charset("utf8mb4");
            $conex -> autocommit(false);
            $result=$conex->query("SELECT nombre_corto, cod FROM producto");
            $conex -> commit();
        } catch (mysqli_sql_exception $ex){
            $msg="Error en la base de datos entre de nuevo ";
        }
        $conex -> autocommit(true);
        $conex ->close();
    ?>
    <div id="encabezado">     
        <h1>Ejercicio: Conjuntos de resultados en MySQLi</h1>
        <form action="" method="post">
            Producto:
            <select name="producto"> 
                <?php
                    if(!$msg){
                        while ($datos=$result->fetch_object()){
                            echo "<br><option value='{$datos->cod}'";
                            if((isset($_POST['producto']) && $_POST['producto'] == $datos->cod)){
                                echo "selected";
                            }
                            echo ">{$datos->nombre_corto}</option>";
                        }
                    }
                ?>
            </select>
            <input type="submit" name="MostrarStock" value="Mostrar Stock">
        </form>

    </div>
    <div id="contenido">
        <?php
            if (isset($_POST['MostrarStock']) && isset($_POST['producto']) &&!$msg){
                echo "<h1>Stock del producto en las tiendas:</h1>";
                try {
                    $conex=new mysqli("localhost", "dwes", "abc123.", "dwes");
                    $conex -> set_charset("utf8mb4");
                    $conex -> autocommit(false);
                    $result=$conex->query("SELECT stock.tienda, stock.unidades, tienda.nombre FROM stock INNER JOIN tienda ON stock.tienda = tienda.cod WHERE stock.producto = '{$_POST['producto']}'");
                    $conex -> commit();
                } catch(Exception $ex){
                    $msg="Error en la base de datos entre de nuevo ";
                }
                $conex -> autocommit(true);
                $conex ->close();

                while ($datos=$result->fetch_object()){
                    echo "<br> Tienda: $datos->nombre : $datos->unidades Unidades <br>";
                }
            }
        ?>
    </div>
</body>
</html>