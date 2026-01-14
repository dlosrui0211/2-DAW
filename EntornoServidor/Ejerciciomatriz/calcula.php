<?php
include 'funciones.php';

$operacion= isset($_GET['operacion']) ? $_GET['operacion'] : '';
$filas=isset($_POST['filas']);
$columnas=isset($_POST['columnas']);
$erroresfilas= "";
$errorcolumnas= "";
$errordiagonal="";

if (isset($_POST['aceptar'])){
    if (empty($_POST['filas']) && is_numeric($_POST['filas']) && $_POST['filas']>0){
        $erroresfilas = "Las filas no deben de estar en blanco, ni ser menor de 0, debe de ser un numero";
    }
    if (empty($_POST['columnas']) && is_numeric($_POST['columnas']) && $_POST['columnas']>0){
        $errorescolumnas = "Las columnas no deben de estar en blanco, ni ser menor de 0, debe de ser un numero";
    }
    if ($_GET['operacion']== 'sumadiagonalprincipal' && $_POST['filas'] == $_POST['columnas']){
        $errordiagonal = "Filas y columnas deberán ser iguales";
    }
}

if (isset($_POST['aceptar']) && empty($erroresfilas) && empty($errorcolumnas) && empty($errordiagonal)){
    $matriz=crearmatriz($_POST['filas'],$_POST['columnas']);
    imprimirmatriz($matriz);

    //operaciones
    if($operacion == 'sumafilas'){
    echo "La suma de todas las filas: ".sumafilas($matriz);
    } elseif($operacion == 'sumacolumnas'){
        echo "La suma de todas las columnas: ".sumacolumnas($matriz);
    } elseif($operacion == 'sumafilasycolumnas'){
        echo "La suma total de la matriz: ".sumafilasycolumnas($matriz);
    } elseif($operacion == 'sumadiagonalprincipal'){
        echo "La suma de la diagonal principal: ".sumadiagonalprincipal($matriz);
    } else if($operacion == 'matriztraspuesta'){
        //Aqui muestro la matriz traspuesta debajo justo de la original para que se note el cambio de filas con columnas
        $traspuesta= matriztraspuesta($matriz);
        echo "<table border=2> <br>";
        echo "Esta es la matriz traspuesta: ";
        foreach($traspuesta as $fila){
            echo "<tr>";
            foreach($fila as $valor){
                echo "<td>".$valor."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
} else {

?>
<form action="" method="POST">
    <input type="hidden" name="operacion" value="<?php echo $operacion;?>">
    Nº Filas <input type="text" name="filas" value="<?php echo $filas; ?>"><?php if (!empty($erroresfilas)) echo "<span style='color:red'>$erroresfilas</span>"; ?><br><br>
    Nº Columnas <input type="text" name="columnas" value="<?php echo $columnas; ?>"><?php if (!empty($errorcolumnas)) echo "<span style='color:red'>$errorcolumnas</span>"; ?><br><br>
    <br> <?php if (!empty($errordiagonal)) echo "<span style='color:red'>$errordiagonal</span>";?>;
    <input type="submit" name="aceptar" value="aceptar">
</form>
<?php
}