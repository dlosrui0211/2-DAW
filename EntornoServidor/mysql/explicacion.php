<?php
$driver=new mysqli_driver();
$driver->report_mode=0;
echo "Gestion de errores: ".$driver->report_mode."<br>";

$conex=new mysqli("localhost","dwes","abc123.","empleados");

if ($conex->connect_errno){
    echo "ERRRO: ".$conex->connect_errno."-".$conex->connect_error;
    die("adios");
}


$nombre='pepe';
try{
    $conex=new mysqli("localhost","dwes","abc123.","empleados");
    $conex->set_charset("utf8mb4");
    $conex->autocommit(false);
    $conex->query("UPDATE datos SET Salario=5000 WHERE DNI='12345678A'");
    $conex->query("INSERT INTO datos (DNI,nombre,apellidos,Salario) VALUES('12345678B', '$nombre', 'lopez', '12000')");
    $conex->commit();
} catch (mysqli_sql_exception $ex){
    echo "<br> Codigo: ".$ex->getCode()." Error: ".$ex->getMessage()."<br>";
}
$conex->autocommit(true);
$conex->close();



//Select

try {
    $conex=new mysqli("localhost","dwes","abc123.","empleados");
    $conex->set_charset("utf8mb4");
    $result=$conex->query("SELECT * FROM datos");
    while ($datos=$result->fetch_object())
        echo "<br>".$datos->Nombre;
    $result->data_seek(0); // Esto para que saquen los dos tanto objeto como array
    while ($datos=$result->fetch_assoc())
        echo "<br>".$datos["Nombre"];
} catch (Exception $ex){

}
?>