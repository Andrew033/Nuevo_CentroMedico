<html>
<haed>
<link rel=StyleSheet href="estilo.css" type="text/css" media=screen>
<title>ELIMINAR CITA</title>
</haed>
<header class="header">
 <div class="conteinaer log-nav-conte">
  <a class="logo">CENTRO MEDICO</a>
  <nav class="navi">
   <ul>
    <li><a href="/CentroMedico/crearcita.html">Crear Cita</a></li>
     <li><a href="/CentroMedico/Loing.html">Crear Perfil</a></li>
     <li><a href=""></a></li>
     <li><a href=""></a></li>
    </ul>
   </nav>
  </div>
</header>
<body>
<form action="crearcita.html" method="post" class="form" >
<input class="button" type ="submit" value="Volver">
</form>
<footer class="footer">
<div class="conteiner">
<p>Contactenos:+50687398612</p>
</div>
</footer>
<?php
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");

$registros=mysqli_query($cone,"select Cod_Cita from sistema where Nombre= '$_REQUEST[Nombre]'") or
  die("Problemas en el select:".mysqli_error($cone));
  
if($reg=mysqli_fetch_array($registros))
{
mysqli_query($cone,"delete from sistema where Nombre='$_REQUEST[Nombre]'")or die ("Prolblemas con la informacion:".mysqli_error($cone));
echo "**El Paciente Fue Eliminado**";

}

else 
{
echo"el usurio no se encontro intente de nuevo";

}
mysqli_close($cone);
?>


</body>
</html>