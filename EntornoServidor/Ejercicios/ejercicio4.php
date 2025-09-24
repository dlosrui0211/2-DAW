<?php

$num=1;
echo "<table border=1>";

    for ($j=0; $j < 5; $j++){
        echo "<tr>";

            for ($i=0; $i < 7; $i++){
                echo "<td>$num</td>";
                $num += 1;
            }
        echo "</tr>";
    }
echo "</table>";




?>