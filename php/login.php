<?php
	 if(isset($_POST['User']) && isset($_POST['Password'])){
		 require_once("Conexion.php");		
	 }


$Usuario=$_POST['User'];
$Pass=$_POST['Password'];

$query="SELECT * FROM usuario where password='$Pass' and usuario='$Usuario'"; 


$consulta2=$conexion->query($query);
$rows = mysqli_num_rows($consulta2);

if($rows==1){
    header("Location:../menu.html");
}else{
    echo "Los datos son incorrectos";
}
 
    
     
     
 ?>