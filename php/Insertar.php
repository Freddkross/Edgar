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




mysqli_query($conexion,"INSERT INTO discos VALUES('$Id', '$Album', '$Genero', '$Autor', '$Pasillo', '$Area', '$Estante', 
	'$FechaIng'");
mysqli_close($conexion);
//header('Location:../Altas.html');
?>