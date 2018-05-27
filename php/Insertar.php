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




$sql=mysqli_query($conexion,"INSERT INTO discos
 (ID, Album,  Autor, Genero, Pasillo, Area, Estante, Fecha) VALUES 
 (Null, '$Album', '$Genero', '$Autor', '$Pasillo', '$Area', '$Estante', '$FechaIng')");


mysqli_close($conexion);

if($sql){
	header("Location:../Busqueda.html");
}else{
	echo "Los datos no se pudieron guardar";
}

?>