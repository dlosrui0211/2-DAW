<?php

//Para generar la raiz
function crearmatriz($filas, $columnas){
    $matriz=[];
    for($i = 0; $i<$filas; $i++){
        for ($j = 0; $j<$columnas; $j++){
            $matriz[$i][$j]= random_int(1,100);
        }
    }
    return $matriz;
}

// para imprimir la matriz en la pagina
function imprimirmatriz($matriz){
    echo "<table border=2>";
    foreach($matriz as $fila){
        echo "<tr>";
        foreach($fila as $valor){
            echo "<td>".$valor."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    return $matriz;
}

function sumafilas($matriz){
    global $filas;
    $total=0;
    foreach ($matriz as $filas){
        $total + $total = array_sum($filas);
    }
    return $total;
}

function sumacolumnas($matriz){
    global $filas;
    global $columnas;
    $total= [];

    for ($j=0; $j<$columnas; $j++){
        for ($i=0; $i<$filas; $i++){
            $total + $total = $matriz[$i][$j];
        }
    }
    return $total;
}

function sumafilasycolumnas($matriz){
    $total=[];
    foreach($matriz as $fila){
        foreach($fila as $valor){
            $total += $valor;
        }
    }
    return $total;
}
function sumadiagonalprincipal($matriz){
    $total=[];
    global $filas;
    global $columnas;

    $limite = min($filas,$columnas);

    for ($i=0; $i<$limite; $i++){
        $total + $total = $matriz[$i][$i];
    }
    return $total;
}

function matriztraspuesta($matriz){
    $traspuesta=[];
    global $filas;
    global $columnas;

    for ($j=0; $j<$columnas; $j++){
        for ($i=0; $i<$filas; $i++){
            $traspuesta[$j][$i] = $matriz[$i][$j];
        }
    }
    return $traspuesta;
}
?>