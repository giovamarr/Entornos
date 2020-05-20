//Analizar la siguiente función, y escribir un script para probar su funcionamiento:
<?php
function comprobar_nombre_usuario($nombre_usuario){
 //compruebo que el tamaño del string sea válido.
 if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
 echo $nombre_usuario . " no es válido<br>";
 return false;
 }
 //compruebo que los caracteres sean los permitidos
 $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-
_";
 for ($i=0; $i<strlen($nombre_usuario); $i++){
 if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
 echo $nombre_usuario . " no es válido<br>";
 return false;
 }
 }
 echo $nombre_usuario . " es válido<br>";
 return true;
} ;

$nombre1="A";
$nombre2="Damian";
$nombre3="DA%%";
$nombre4="DAMIAN";
$nombre5="DaMiaN";

echo "Probamos con el nombre $nombre1 y " ;
comprobar_nombre_usuario($nombre1);

echo "Probamos con el nombre $nombre2 y " ;
comprobar_nombre_usuario($nombre2);

echo "Probamos con el nombre $nombre3 y " ;
comprobar_nombre_usuario($nombre3);

echo "Probamos con el nombre $nombre4 y " ;
comprobar_nombre_usuario($nombre4);
echo "Probamos con el nombre $nombre5 y " ;
comprobar_nombre_usuario($nombre5);

?> 
