<?php


$num=1;
$j = 0;
echo "<table border=1>";
        while ($j < 5):
            echo "<tr>";
                $i = 0;
                while ($i < 7 && $num <= 35):
                    $i++;
                    echo "<td>$num</td>";
                    $num += 1;
                endwhile;
            echo "</tr>";
            $j++;
        endwhile;
echo "</table>";

?>