<?php

$tienda= false;
$unidades= false;
$error= false;
$msg= "";

if (isset($_POST['traspasar'])){
    if ($_POST['tiendaOg'] != $_POST['tiendaDes']){
        $tienda = true;
    }

    if ($_POST['unidades'] > 0){
        $unidades = true;
    }
}

if (isset($_POST['traspasar']) && $tienda && $unidades){
    try {
    $conex = new mysqli("localhost", "dwes", "abc123.", "dwes");
    $conex -> set_charset("utf8mb4");
    } catch (mysqli_sql_exception $ex){
        $msg= "Error al conectar a la base de datos";
    }
    if (!$error){
        try{
            $conex -> autocommit(false);
            $conex -> query("UPDATE stock set unidades = unidades - $_POST[unidades] WHERE tienda = $_POST[tiendaOg] and producto = '$_POST[codpro]' and unidades > $_POST[unidades]");
            $conex -> query("UPDATE stock set unidades = unidades + $_POST[unidades] WHERE tienda = $_POST[tiendaDes] and producto = '$_POST[codpro]'");
            if($conex -> affected_rows == 0){
                $msg= "error unidades";
            } else {
                $conex -> query("UPDATE stock set unidades = unidades + $_POST[unidades] WHERE tienda = $_POST[tiendaDes] and producto = '$_POST[codpro]'");
                if($conex -> affected_rows == 0){
                    $conex -> query("INSERT INTO stock VALUES('$_POST[codpro]',$_POST[tiendaDes], $_POST[unidades])");
                }
                $conex -> commit();
                $msg= "Traspaso correcto";
            }
        } catch (mysqli_sql_exception $ex){
            $msg= "Error con el servidor, probar mas tarde";
            $conex->rollback();
        }
        $conex ->autocommit(true);
        $conex->close();
    }    
}
else {
?>

<form action="" method="post">
    Tienda Origen <br>
    <select name="tiendaOg">
        <option value="1">Central</option>
        <option value="2">Sucursal1</option>
        <option value="3">Sucursal2</option>
    </select>
    <br>
    tienda Destino <br>
    <select name="tiendaDes">
        <option value="1">Central</option>
        <option value="2">Sucursal1</option>
        <option value="3">Sucursal2</option>
    </select>
    <br>
    <?php if (isset($_POST['traspasar']) && !$tienda) echo "Las tiendas tienen que ser diferentes"?>
    <input type="text" name="codpro">Codigo producto <br>
    <input type="number" name="unidades">Unidades <?php if (isset($_POST['traspasar']) && !$unidades) echo "Las Unidades tienen que ser diferentes"?>
    <br>
    <input type="submit" name="traspasar" value="Traspasar">

</form>
<?php
}
?>