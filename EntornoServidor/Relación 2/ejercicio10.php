
<form method="post">
    <input type="text" name="texto">
    <input type="submit" value="Contar vocales">
</form>
<?php

$texto="";
if(isset($_POST['texto'])){
    $texto= $_POST['texto'];
}
$longitud = strlen($texto);
$vocales = ['a','e','i','o','u','A','E','I','O','U'];
$contador=0;
for ($i=0; $i < $longitud; $i++){

    if( in_array($texto[$i],$vocales)){
            $contador++;
        }
    }
    
echo "El numero de vocales que salen de ".$texto." son: ". $contador;


?>