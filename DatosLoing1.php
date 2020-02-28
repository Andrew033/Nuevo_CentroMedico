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
    <li><a href=""></a></li>
     <li><a href=""></a></li>
     <li><a href=""></a></li>
     <li><a href=""></a></li>
    </ul>
   </nav>
  </div>
</header>
<body>
<form action="index.html" method="post" class="form" >
<input class="button button span " type ="submit" value="Ingresar">
 <br>

<?php
/*
$usar="root";
$clave="";
$servidor="localhost";
$bd="pizza1";*/

$cone=mysqli_connect("localhost","root","","clinica_medica") or die("No hay conexion");

mysqli_query($cone,"insert into sistema(Nombre,Apellidos,Cedula,Telefono,Correo,Contra) value ('$_REQUEST[Nombre]','$_REQUEST[Apellidos]','$_REQUEST[Cedula]','$_REQUEST[Telefono]','$_REQUEST[Correo]','$_REQUEST[Contra]')")
or die("Datos no ingr".mysqli_error($cone));

mysqli_close($cone);

echo "Los  Datos han ingresado al Sistema";


?>
</form>
<footer class="footer">
<div class="conteiner">
<p>Contactenos:+50687398612</p>
</div>
</footer>
</body>
<html>

