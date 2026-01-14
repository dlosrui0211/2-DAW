<table border="2">
    <tr><th>Indice</th><th>Columna</th></tr>
    
<?php

foreach ($_SERVER as $key=>$valor){
    echo "<tr>";
       
    
    echo "<td>";

        echo $key;

    echo "</td>";

    echo "<td>";

        echo $valor;

    echo "</td>";

    echo "</tr>";
}






?>
</table>