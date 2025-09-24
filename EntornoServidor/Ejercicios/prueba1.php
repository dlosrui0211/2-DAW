<?php

$d1= 25;
$m1= 8;
$y1=2028;

$dia= date('l', mktime(0,0,0,$m1,$d1,$y1));
switch($dia){
    case "Monday":
        $d= "Lunes";
        break;
    case "Tuesday":
        $d= "Martes";
        break;
    case "Wendsday":
        $d= "Miercoles";
        break;
    case "Thursday":
        $d= "Jueves";
        break;
    case "Friday":
        $d= "Viernes";
        break;
    case "Saturday":
        $d= "Sabado";
        break;
    case "Sunday":
        $d= "Domingo";
        break;
}

$mes=date('n', mktime(0,0,0,$m1,$d1,$y1));
switch($mes){
    case 1:
        $m= "Enero";
        break;
    case 2:
        $m= "Febrero";
        break;
    case 3:
        $m= "Marzo";
        break;
    case 4:
        $m= "Abril";
        break;
    case 5:
        $m= "Mayo";
        break;
    case 6:
        $m= "Junio";
        break;    
    case 7:
        $m= "Julio";
        break;
    case 8:
        $m= "Agosto";
        break;  
    case 9:
        $m= "Septiembre";
        break;
    case 10:
        $m= "Octubre";
        break;  
    case 11:
        $m= "Noviembre";
        break;
    case 12:
        $m= "Diciembre";
        break;  
}


echo $d.", ".date("d", mktime(0,0,0,$m1,$d1,$y1))." de ".$m." del ".date("Y", mktime(0,0,0,$m1,$d1,$y1))


?>