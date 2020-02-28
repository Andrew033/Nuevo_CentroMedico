<!DOCTYPE html>
<html lang="es">
<haed>
	<link rel="icon" type="image/png" href="iconto.ico" />
<meta http-equiv="Content-Type" charset="UTF-8" />
<LINK REL=StyleSheet HREF="estilo1.css" TYPE="text/css" MEDIA=screen>
<title>CENTRO MEDICO</title>
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
<body class="form">

<?php
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
mysqli_query($cone, "update sistema set Nombre ='$_REQUEST[Nombre2]' where Nombre ='$_REQUEST[Nombre1] '
")or die("Problemas con el select: ".mysqli_error($cone));
//
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
mysqli_query($cone, "update sistema set Apellidos ='$_REQUEST[Apellidos2]' where Apellidos ='$_REQUEST[Apellidos1] '
")or die("Problemas con el select: ".mysqli_error($cone));
//
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
mysqli_query($cone, "update sistema set Cedula ='$_REQUEST[Cedula2]' where Cedula ='$_REQUEST[Cedula1] '
")or die("Problemas con el select: ".mysqli_error($cone));
//
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
mysqli_query($cone, "update sistema set Telefono ='$_REQUEST[Telefono2]' where Telefono ='$_REQUEST[Telefono1] '
")or die("Problemas con el select: ".mysqli_error($cone));
//

echo "Los Cambios Se Realizaron Con Exito";
mysqli_close($cone);

?>
<footer class="footer">
<div class="conteiner">
<p>Contactenos:+50687398612</p>
</div>
</footer>
</body>
</html>
