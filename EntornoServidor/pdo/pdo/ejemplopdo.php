<?php
try {
    // forma de crear un pdo de forma muy parecida a un objeto mysqli y el fetch obj devuelve objetos
    $opciones=array(PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,PDO::ATTR_CASE=>PDO::CASE_LOWER);
    $conex= new PDO('mysql:host=localhost;dbname=dwes;charset=utf8mb4','dwes','abc123.',$opciones);
    // El exec devuelve un entero y se usa cuando no devuelve resultados, devuelve un numero de filas afectadas affect_row(mysqli), en cambio query devuelve resulatados
    $conex->beginTransaction();
    $reg1= $conex->exec("UPDATE stock set unidades=200 where producto='3DSNG'");
    $reg2= $conex->exec("UPDATE stock set unidades=500 where producto='ACERAX3950'");
    if($reg1===0) echo "No se ha actualizado el producto 1 <br>";
    if($reg2===0) echo "No se ha actualizado el producto 2";
    $conex->commit();
} catch (PDOException $ex) {
    $conex->rollBack();
    echo $ex->getMessage()."<br>";
    print_r($ex->errorInfo);
}

/*
echo "<br><br>CONSULTA<br><br>";
try {
    $result=$conex->query("select * from producto");
    echo "Numero de filas devuelto: ".$result->rowCount()."<br>";
    while ($fila=$result->fetch()){
        var_dump($fila);
        echo "<br>=========<br>";
        }
        } catch (Exception $ex) {
            echo $ex->getMessage()."<br>";
            }
            */
            
            
    
echo "<br><br>CONSULTA PREPARADA<br><br>";

try {
    $menor=100;
    $mayor=200;
    //$result=$conex->prepare("SELECT * from producto where PVP>? AND PVP<?");
    $result=$conex->prepare("SELECT * from producto where PVP>:pvp2 AND PVP<:pvp1");
    for ($i=0; $i<1000; $i+=100){
        //$result->bindParam(1,$menor);
        //$result->bindParam(2,$mayor);
        $result->bindParam(":pvp2",$menor);
        $result->bindParam(":pvp1",$mayor);
        $result->execute();
        $menor+=$i;
        $mayor+=$i;
        echo "Producto con el precio entre ".$menor." y ".$mayor."<br>"."<br>";
        while ($fila=$result->fetch()){ // El fetch te devuelve una array
            echo "Nombre: ".$fila->nombre_corto;
            echo "<br>==================================<br>";
        }
    }
} catch (Exception $ex) {
    echo $ex->getMessage()."<br>";
}

?>