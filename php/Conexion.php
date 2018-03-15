<?php
// Se establecen las variables con los datos de acceso
$servidor = "localhost";
$usuario = "root";
$contra = "";
$basedatos = "radio";

// se establece la conexion con la base de datos.
$conexion = mysqli_connect($servidor,$usuario,$contra,$basedatos);
// se evalua si no se ha producido la conexión en ese caso se finaliza
// la ejecución del programa
if( !$conexion ) { 
 die("Error en la conexión con la base de datos");
}



?>