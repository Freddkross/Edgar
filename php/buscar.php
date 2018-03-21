<?php
$mysqli = new  mysqli("localhost","root", "","radio");

$salida = "";
$query = "SELECT * FROM discos";

if(isset($_POST['consulta'])){
	$q = $mysqli->real_escape_string($_POST['consulta']);
	$query= "SELECT ID, Album, Genero, Autor, Pasillo, Area, Estante,Fecha FROM discos WHERE Album LIKE '%".$q."%' OR Genero LIKE '%".$q."%' OR Autor LIKE '%".$q."%'";

}

$resultado= $mysqli->query($query);


if ($resultado->num_rows > 0) {

	$salida.= "<table  class='table table-striped table-dark mt-5 ml-1'>
            <thead>
              <tr>
                <th scope='col'>ID</th>
                <th scope='col' class='text-center'>Album</th>
                <th scope='col' class='text-center'>Autor</th>
                <th scope='col' class='text-center'>Genero</th>
                <th scope='col' class='text-center'>Pasillo</th>
                <th scope='col' class='text-center'>Area </th>
                <th scope='col' class='text-center'> </th>
                <th scope='col' class='text-center'>Estante</th>
                <th scope='col' class='text-center'> </th>
                <th scope='col' class='text-center'>Fecha de Ingreso</th>
              </tr>
            </thead>
            <tbody>  ";

             while( $fila = $resultado->fetch_assoc()) {
               $salida.="<tr>
                      <th scope='row'>".$fila['ID']."</th>
                      	<td class='text-center'>".$fila['Album']."</td>
                      	<td class='text-center'>".$fila['Genero']."</td>
                      	<td class='text-center'>".$fila['Autor']."</td>
                      	<td class='text-center'>".$fila['Pasillo']."</td>
                      	<td class='text-center'>".$fila['Area']."<td>
                      	<td class='text-center'>".$fila['Estante']."<td>
                        <td class='text-center'>".$fila['Fecha']."<td>
                      
                    </tr>";
                  }
  $salida.=" </tbody>
 			</table>";

}else{
	$salida.="No hay Datos :(";
}


echo $salida;

$mysqli->close();
	
	
             


?>