<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="iconto.ico" />
	<LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>
	<meta charset="UTF-8">
	<title>Sistema</title>
</haed>
<header class="header">
 <div class="conteinaer log-nav-conte">
  <a class="logo">CENTRO MEDICO</a>
  <nav class="navi">
   <ul>
    <li><a href="/CentroMedico/crearcita.html">Crear Cita</a></li>
     <li><a href="/CentroMedico/consultaborrar.html">Eliminar Perfil</a></li>
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
                        from sistema
 where Correo='$_REQUEST[Correo]' && Contra='$_REQUEST[Contra]'") or
  die("Problemas en el select:".mysqli_error($cone));

if($reg=mysqli_fetch_array($registros))
{
?>
<form class="formloging" method= "post" action ="Modificar2.php">
<br>
<div class="div">
**BIENVENIDO**
<br>
<?php echo $reg['Nombre']?>
<br>
<?php echo $reg['Apellidos']?>
<br>
<?php echo $reg['Cedula']?>
<br>
<?php echo $reg['Telefono']?>
<br>
<?php echo $reg['Correo']?>
<br>
<a class="a">Para realizar una cambio ingrese su contraseña</a>
<br>
<input type="text" class="input1" name="Contra">
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


echo'
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="iconto.ico" />
  <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>
  <meta charset="UTF-8">
  <title>Sistema</title>
</haed>
<header class="header">
 <div class="conteinaer log-nav-conte">
  <a class="logo">CENTRO MEDICO</a>
  <nav class="navi">
   <ul>
    <li><a href="/CentroMedico/crearcita.html"></a></li>
     <li><a href="/CentroMedico/consultaborrar.html"></a></li>
     <li><a href=""></a></li>
     <li><a href=""></a></li>
    </ul>
   </nav>
  </div>
</header>
<body>
<form  method= "post" action ="Loing.html">
     <br>
      <br>
    <div class="div">
     <br>
      <br>
     El Usuario No existe
     <br>
  **Debes crear un perfil**
  <br>
  <input type="submit" value="Crear">
   <br>
    <br>
  </div>
   <br>
</form>
</body>
</html>';
}




mysqli_close($cone);

?>


<footer class="footer">
<div class="conteiner">
<p>Contactenos:+50687398612</p>
</div>
</footer>
</body>
</html>