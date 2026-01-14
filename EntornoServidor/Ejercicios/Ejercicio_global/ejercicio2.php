<table border="1">
<?php


$matriz = array (
    "Marketing" => array(
        "Nombre" => "pepe",
        "Apellidos" => "López",
        "Salario" => 1500,
        "Edad" => 35),
    "Contabilidad" => array(
        "Nombre" => "Juan",
        "Apellidos" => "Sanchez",
        "Salario" => 1750,
        "Edad" => 28),
    "Ventas" => array(
        "Nombre" => "Maria",
        "Apellidos" => "Carpio",
        "Salario" => 1675,
        "Edad" => 33),
    "Informática" => array(
        "Nombre" => "Pedro",
        "Apellidos" => "Luna",
        "Salario" => 2100,
        "Edad" => 48),
    "Direccion" => array(
        "Nombre" => "Rosa",
        "Apellidos" => "Catala",
        "Salario" => 5100,
        "Edad" => 53),
    
);


foreach ($matriz as $ind=>$fila){
    
    echo "<tr>";
        echo "<th></th>";
        foreach ($fila as $indc=>$valor){
            echo "<th>$indc</th>";
        }
    echo "</tr>";
    break;
    
}

foreach ($matriz as $ind=>$fila){
    
    echo "<tr>";
        echo "<th>$ind</th>";
            
            foreach ($fila as $indc=>$valor){
                echo "<td>$valor</td>";
            }    
    echo "</tr>";
    
}



?>
</table>
