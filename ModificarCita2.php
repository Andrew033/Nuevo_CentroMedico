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
    <li><a href="/CentroMedico/ver.html">Ver Cita</a></li>
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
mysqli_query($cone, "update pacientes set Hora ='$_REQUEST[Hora2]' where Hora ='$_REQUEST[Hora1] '
")or die("Problemas con el select: ".mysqli_error($cone));
//
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
mysqli_query($cone, "update pacientes set Momento ='$_REQUEST[Momento2]' where Momento ='$_REQUEST[Momento1] '
")or die("Problemas con el select: ".mysqli_error($cone));
//
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
mysqli_query($cone, "update pacientes set Fecha ='$_REQUEST[Fecha2]' where Fecha ='$_REQUEST[Fecha1] '
")or die("Problemas con el select: ".mysqli_error($cone));
//
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
mysqli_query($cone, "update pacientes set Doctor ='$_REQUEST[Doctor2]' where Doctor ='$_REQUEST[Doctor1] '
")or die("Problemas con el select: ".mysqli_error($cone));
//
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
mysqli_query($cone, "update pacientes set Sintoma ='$_REQUEST[Sintoma2]' where Sintoma ='$_REQUEST[Sintoma1] '
")or die("Problemas con el select: ".mysqli_error($cone));
//
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
mysqli_query($cone, "update pacientes set Especialidad ='$_REQUEST[Especialidad2]' where Especialidad ='$_REQUEST[Especialidad1] '
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