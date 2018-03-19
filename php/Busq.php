<?php
$Buscar=$_POST['buscar'];
$SelectQuery="";
$Palabra=$_POST['Palabra'];


	
	if($Buscar="ID"){
		
		header("Location:../ID.php");
	}
		header("Location:../ResulAu.html");
	}
		header("Location:../ResulGe.html");
	}elseif ($Buscar="ALBUM") {
		$SelectQuery="SELECT * FROM discos where Album='$Palabra'";
		header("Location:../ResulAl.html");
	}


             


?>