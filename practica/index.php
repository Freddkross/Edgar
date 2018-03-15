<?php
 // realizar el enlace con el archivo de configuración
 require_once("configuracion.php");
 // realizar el enlace con el archivo de conexión
 require_once("acesso.php");
?>
<!DOCTYPE HTML>
<html>
<head>
 <title>Ejercicio 1 - MySQL</title>
 <meta charset="utf-8">
 <meta name="author" content="ana catherine">
</head>
<body>

<h1 class="titulo">Ejercicio 1 - Acceso BD MySQL</h1>
<!-- acceso a los registros de la tabla de alumnos y visualización de los mismos
utilizando una tabla html -->
<table>
 <thead>
 <tr>
 <th>Id.</th>
 <th>Nombre</th>
 <th>Apellidos</th>
 <th>Localidad</th>
 <th>Provincia</th>
 <th>F. Nacimiento</th>
 </tr>
 </thead>
 <tbody>
 <?php
 // crear la consulta de acceso a los datos de alumnos
 $consulta = "[escriba aquí la consulta de MySQL]";
 // a continuación se envia la consulta al servidor MySQL
 $resultado = mysqli_query($conexion,$consulta);
 // se recorren los registros visualizando una fila de tabla
 // por cada uno de los registros existentes.
 while( $fila = mysqli_fetch_assoc($resultado) ) {
 echo "<tr>";
 echo "<td>".$fila['Identificador']."</td>";
 echo "<td>".$fila['Nombre']."</td>";
 echo "<td>".$fila['Apellidos']."</td>";
 echo "<td>".$fila['Localidad']."</td>";
 echo "<td>".$fila['Provincia']."</td>";
 echo "<td>".$fila['Fecha_Nacimiento']."<td>";
 echo "</tr>";
 }
 ?>
 </tbody>
</table>
</body>
</html>
