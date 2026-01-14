<?php

$y= 2024;

if ($y % 4 == 0) {
    if ($y % 100 == 0){
        if ($y % 400 == 0){
            echo ("El año ".$y." es bisiesto");
        } else {
            echo ("El año ".$y." no es bisiesto");
        }
    } else {
        echo ("El año ".$y." es bisiesto");
    }
} else {
    echo ("El año ".$y." no es bisiesto");
}




?>