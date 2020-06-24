<?php
//variables que almacenan los valores de nuestra bbdd
$servidor = 'localhost';
//solo para xamp cuando lo alojemos en un hosting hay que cambiarlo
$usuario = 'root';
$clave = '';
$nombreBd ='noodel';
//realizo la conexion
$conexion = new mysqli($servidor,$usuario,$clave,$nombreBd);
//si hay un error hago un echo
if ($conexion->connect_error){
    echo '<h3>No se ha podido conectar a bbdd</h3>';
}


?>