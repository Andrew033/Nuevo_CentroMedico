<!DOCTYPE html>
<html lang="es">
<haed>
	<link rel="icon" type="image/png" href="iconto.ico" />
<meta http-equiv="Content-Type" charset="UTF-8" />
<LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css" MEDIA=screen>
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
<body>

<?php
$cone=mysqli_connect("localhost","root","","clinica_medica") or
    die("Problemas con la conexión");
$registros=mysqli_query($cone,"select *
                        from sistema
 where Contra='$_REQUEST[Contra]'") or
  die("Problemas en el select:".mysqli_error($cone));

if($reg=mysqli_fetch_array($registros))
{
?>
<form class="formloging" method= "post" action ="Modificar3.php">

<div class="div">
<br>
**Ingresar el nuevo Nombre: **
<br>
<input type="text" class="input1" name="Nombre2" value="<?php echo $reg['Nombre']?>" >
<br>
<br>
<input type="hidden" name="Nombre1" value="<?php echo $reg['Nombre']?>">
<br>
**Ingresar los nuevos Apellidos: **
<br>
<input type="text" class="input1" name="Apellidos2" value="<?php echo $reg['Apellidos']?>" >
<br>
<br>
<input type="hidden" name="Apellidos1" value="<?php echo $reg['Apellidos']?>">
<br>
**Ingresar su nueva Cedula: **
<br>
<input type="text" class="input1" name="Cedula2" value="<?php echo $reg['Cedula']?>" >
<br>
<br>
<input type="hidden" name="Cedula1" value="<?php echo $reg['Cedula']?>">
<br>
**Ingresar el nuevo Telefono: **
<br>
<input type="text"  class="input1" name="Telefono2" value="<?php echo $reg['Telefono']?>" >
<br>
<br>
<input type="hidden" name="Telefono1" value="<?php echo $reg['Telefono']?>">
<br>
<input type="submit" value="Cambiar" class="button button span ">
<br>
</div>
<br>
</form>
<?php



}

else
{
echo "No existe";

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