<html>
<head>
  <link rel="icon" type="image/png" href="iconto.ico" />
<LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>
<title>Loing</title>
</head>
<header class="header">
 <div class="conteinaer log-nav-conte">
  <a class="logo">CENTRO MEDICO</a>
  <nav class="navi">
   <ul>
    <li><a href="/CentroMedico/ver.html">Ver Citas</a></li>
     <li><a href=""></a></li>
     <li><a href=""></a></li>
     <li><a href=""></a></li>
    </ul>
   </nav>
  </div>
</header>
<body>
<form action="formucita.html" method="post" class="form" >
<input class="button" type ="submit" value="Volver">
 <br>

<?php
/*
$usar="root";
$clave="";
$servidor="localhost";
$bd="pizza1";*/

$cone=mysqli_connect("localhost","root","","clinica_medica") or die("No hay conexion");

mysqli_query($cone,"insert into pacientes(Hora,Momento,Fecha,Doctor,Sintoma,Especialidad) value ('$_REQUEST[Hora]','$_REQUEST[Momento]','$_REQUEST[Fecha]','$_REQUEST[Doctor]','$_REQUEST[Sintoma]','$_REQUEST[Especialidad]')")
or die("Datos no ingr".mysqli_error($cone));

mysqli_close($cone);

echo "Los  Datos han ingresado al Sistema";


?>
</form>
</body>
<html>

