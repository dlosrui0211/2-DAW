<?php

function contador(){
    static $a = 0;
    $a++;
    return $a;
}
// el br lo concatenamos de esta manera en php
echo contador()."<br>";
echo contador();
echo "<br>".mktime(14,55,25,9,29,2025);
date_default_timezone_set("Europe/Madrid");
echo "<br>".date_default_timezone_get();

echo "<br>".date('H:i:s \d\e\l l d/m/Y');

echo "<br>".date('H:i:s \d\e\l l d/m/Y',mktime(14,55,25,9,29,2025));

if (checkdate(2, 30, 2025))
    echo "<br>"."Fecha Bien";
else
    echo "<br>"."Fecha mal";


echo "<br>".$_SERVER['PHP_SELF'];
echo "<br>".$_SERVER['REMOTE_ADDR'];
?>