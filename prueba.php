<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$edad=17;
if($edad>=18){
    echo "Es mayor de edad";
}
else {
    echo"acceso denegado";
}
?> 