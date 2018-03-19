<?php
require_once("php/Conexion.php");
//require_once("php/Busq.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="css/Style.css">
    <title>Consultas</title>
  </head>
  <body>
<!--cabecera de la pagina -->

    <section class="title ">
        <h1>Consultas</h1>
    </section>
<!-- fin cabecera de la pagina -->

<!--inicio del menu -->
<nav class="navegacion">
        <ul class="menu">

            <li class="first-item">
                <a href="menu.htlm">
                    <img src="img/home.jpg" alt="" class="imagen">
                    <span class="text-item">Inicio</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="busqueda.php">
                    <img src="img/co.jpg" alt="" class="imagen">
                    <span class="text-item">Consultas</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="Altas.html">
                    <img src="img/al.jpg" alt="" class="imagen">
                    <span class="text-item">Altas</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="Bajas.html">
                    <img src="img/ba.jpg" alt="" class="imagen">
                    <span class="text-item">Bajas</span>
                    <span class="down-item"></span>
                </a>
            </li>
        </ul>
    </nav>
    <!--fin del menu -->
    <div  class="col-sm-12 ">
       <div id="msjE" class="alert alert-success d-none"></div>
          <h1 class="display-4 text-center ">Registros Encontrados</h1>
          <table id="msjC" class="table table-striped table-dark mt-5 ml-1">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col" class="text-center">Album</th>
                <th scope="col" class="text-center">Autor</th>
                <th scope="col" class="text-center">Genero</th>
                <th scope="col" class="text-center">Pasillo</th>
                <th scope="col" class="text-center">Area </th>
                <th scope="col" class="text-center"> </th>
                <th scope="col" class="text-center">Estante</th>
                <th scope="col" class="text-center"> </th>
                <th scope="col" class="text-center">Fecha de Ingreso</th>
              </tr>
            </thead>
            <tbody>   
              <?php
                  // a continuación se envia la consulta al servidor MySQL
                


              if(isset($_POST['buscar'])=="ID"){   
              $id='';
              $BuscariD=''; 
              $id=$_POST['Palabra'];
              $BuscariD=$_POST['buscar'];         
              $query1="SELECT * FROM discos where ID='$id'"; 
               $resultado= mysqli_query($conexion,$query1);                 
              }
               if(isset($_POST['buscar'])=="AUTOR"){
              $Au='';
              $BuscarAu=''; 
              $Au=$_POST['Palabra'];
              $BuscarAu=$_POST['buscar']; 
              $query2="SELECT * FROM discos where Autor='$Au'"; 
               $resultado= mysqli_query($conexion,$query2);
              }
              if(isset($_POST['buscar'])=="GENERO"){
              $Ge='';
              $BuscarGe=''; 
              $Ge=$_POST['Palabra'];
              $BuscarGe=$_POST['buscar']; 
              $query3="SELECT * FROM discos where Genero='$Ge'"; 
               $resultado= mysqli_query($conexion,$query3);
              }
              if(isset($_POST['buscar'])=="ALBUM"){
              $AL='';
              $BuscarAL=''; 
              $AL=$_POST['Palabra'];
              $BuscarAL=$_POST['buscar']; 
              $query4="SELECT * FROM discos where Album='$AL'";
               $resultado= mysqli_query($conexion,$query4); 
              }

              

                   
                  // se recorren los registros visualizando una fila de tabla
                  // por cada uno de los registros existentes.
                  while( $fila = mysqli_fetch_assoc($resultado) ) {
                    echo "<tr>";
                      echo "<th scope='row'>".$fila['ID']."</th>";
                      echo "<td class='text-center'>".$fila['Album']."</td>";
                      echo "<td class='text-center'>".$fila['Genero']."</td>";
                      echo "<td class='text-center'>".$fila['Autor']."</td>";
                      echo "<td class='text-center'>".$fila['Pasillo']."</td>";
                      echo "<td class='text-center'>".$fila['Area']."<td>";
                      echo "<td class='text-center'>".$fila['Estante']."<td>";
                      echo "<td class='text-center'><td>";
                    echo "</tr>";
                  }
              ?>                
            </tbody>
          </table>
        </div>
                   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
   
  </body>
</html>