<?php

echo "<table border=2>";
    for ($j = 0; $j < 10; $j++){

    
        echo "<tr>";
    
            for ($s = 0; $s < 10; $s++){
                $numero = rand(1,100);
                if ($numero % 2 == 0){;
                    $numero++;
                }
                echo "<td>$numero</td>";
            }
    
        echo "</tr>";
    }
echo "</table>";

?>