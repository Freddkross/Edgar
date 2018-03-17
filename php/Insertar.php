<?php
require_once("Conexion.php");

$Id=$_POST['ID'];
$Album=$_POST['Album'];
$Genero=$_POST['Genero'];
$Autor=$_POST['Autor'];
$Pasillo=$_POST['Pasillo'];
$Area=$_POST['Area'];
$Estante=$_POST['Estante'];
$FechaIng=$_POST['Fecha'];




$sql=mysqli_query($conexion,"INSERT INTO discos (Id,Album,Autor,Genero,Pasillo,Area,Estante) VALUES (Null, '$Album', '$Genero', '$Autor', '$Pasillo', '$Area', '$Estante')");


mysqli_close($conexion);

if($sql){
	echo "Datos registrados corretamente";
}else{
	echo "Los datos no se pudieron guardar";
}

?>