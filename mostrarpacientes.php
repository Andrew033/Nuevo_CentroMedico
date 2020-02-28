<html>
<head>
  <link rel="icon" type="image/png" href="iconto.ico" />
<LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>
<title>Consulta</title>
</head>
<header class="header">
 <div class="conteinaer log-nav-conte">
  <a class="logo">CENTRO MEDICO</a>
  <nav class="navi">
   <ul>
    <li><a href="/CentroMedico/crearcita.html">Crear Cita</a></li>
     <li><a href="/CentroMedico/index.html">Ver Perfil</a></li>
     <li><a href=""></a></li>
     <li><a href=""></a></li>
    </ul>
   </nav>
  </div>
</header>
<body>

<?php
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
$registros=mysqli_query($cone,"select *
                        from pacientes
 where Cod_Cita='$_REQUEST[Cod_Cita]'") or
  die("Problemas en el select:".mysqli_error($cone));

if($reg=mysqli_fetch_array($registros))
{
?>
<form class="formloging" method= "post" action ="ModificarCita.php">
<br>
<div class="div">
**TU CITA CON CODIGO <?php echo $reg['Cod_Cita']?>**
<br>
Es a Las: <?php echo $reg['Hora']?><?php echo $reg['Momento']?>
<br>
El Dia: <?php echo $reg['Fecha']?>
<br>
Con el Doctor: <?php echo $reg['Doctor']?>
<br>
Su Sintomatologia es: <?php echo $reg['Sintoma']?>
<br>
Con el Especialista: <?php echo $reg['Especialidad']?>
<br>
<a class="a">Para realizar una cambio ingrese su codigo nuevamete</a>
<br>
<input type="text" class="input1" name="Cod_Cita">
<br>
<input type="submit" class="button button span " value="Cambiar">
<br>
<br>
</div>
</form>
<?php



}

else
{
echo "No existen Citas";


}




mysqli_close($cone);

?>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="footer">
<div class="conteiner">
<p>Contactenos:+50687398612</p>
</div>
</footer>
</body>
</html>