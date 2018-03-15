<?php
require_once("php/Conexion.php");

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
                <a href="#">
                    <img src="img/home.jpg" alt="" class="imagen">
                    <span class="text-item">Inicio</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="busqueda.html">
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
    
    <div class="container  mt-5 pt-4">
        <div class="row">
            <div class=" ml-5 col-ms-4 d-flex justify-content-center ">
                 <!-- caracteristicas del album -->
                <figure class="figure mt-3 ">
                    <img src="img/album.jpg"  height="250px" width="250px" class="figure-img img-fluid rounded" alt="caratula del album.">
                    <figcaption class="figure-caption text-left">Caratula del album.</figcaption>
                </figure>
            </div>     
            <div class="col-md-8 mt-3 ">                       
                <form class="form-row">  
                    <div class="col-md-6 ml-3">
                        <input class=" row form-control" placeholder="Buscar..." type="search" name="buscar" id="buscar">
                    </div>
                <button type="submit" class="btn btn-info btn1  col-md-2 " >Buscar</button> 
                <fieldset class=" form-group col-ms-3">
                    <div class="col-sm-8  ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="ID" checked>
                            <label class="form-check-label" for="gridRadios1">ID</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="AUTOR">
                            <label class="form-check-label" for="gridRadios2">Autor</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="ALBUM" >
                            <label class="form-check-label" for="gridRadios3">Album</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="GENERO" >
                            <label class="form-check-label" for="gridRadios3">Genero</label>
                        </div>
                    </div>                                  
                </fieldset>
                </form>
            </div>
        </div>

        <div class="row">

            <!--inicio de la tabla -->
            <div class="col-sm-12 ">
                <h1 class="display-4 text-center ">Registros Encontrados</h1>
                <table class="table table-striped table-dark mt-5 ml-1">
                     <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col" class="text-center">Album</th>
                          <th scope="col" class="text-center">Genero</th>
                          <th scope="col" class="text-center">Autor</th>
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
                         // crear la consulta de acceso a los datos de alumnos
                         $consulta = "SELECT * FROM discos";
                         // a continuación se envia la consulta al servidor MySQL
                         $resultado = mysqli_query($conexion,$consulta);
                         // se recorren los registros visualizando una fila de tabla
                         // por cada uno de los registros existentes.
                         while( $fila = mysqli_fetch_assoc($resultado) ) {
                         echo "<tr>";
                         echo "<th scope='row'>".$fila['ID']."</th>";
                         echo "<td class='text-center'>".$fila['NombreAl']."</td>";
                         echo "<td class='text-center'>".$fila['GeneroAl']."</td>";
                         echo "<td class='text-center'>".$fila['AutorAl']."</td>";
                         echo "<td class='text-center'>".$fila['Pasillo']."</td>";
                         echo "<td class='text-center'>".$fila['Area']."<td>";
                         echo "<td class='text-center'>".$fila['Estante']."<td>";
                         echo "<td class='text-center'>".$fila['FechaIng']."<td>";
                         echo "<td class='text-center'><td>";
                         echo "</tr>";
                         }
                         ?>                
                     </tbody>
                </table>
            </div>
           
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>