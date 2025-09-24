<?php


$num=1;
$n=0;

echo "<table border=1>";

        do {
            echo "<tr>";
                $l=0;
                do{
                    $l++;
                    echo "<td>$num</td>";
                    $num += 1;
                } while($l < 7 && $num <= 35);
            echo "</tr>";
            $n++;
        } while ($n < 5);
echo "</table>";


?>