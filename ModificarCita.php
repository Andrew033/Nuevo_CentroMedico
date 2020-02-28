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
                        from pacientes
 where Cod_Cita='$_REQUEST[Cod_Cita]'") or
  die("Problemas en el select:".mysqli_error($cone));

if($reg=mysqli_fetch_array($registros))
{
?>
<form class="formloging" method= "post" action ="ModificarCita2.php">

<div class="div">
<br>
**Ingresar la nueva hora: **
<br>
<input type="text" class="input1" name="Hora2" value="<?php echo $reg['Hora']?>" >
<br>
<br>
<input type="hidden" name="Hora1" value="<?php echo $reg['Hora']?>">
<br>
**Ingresar el memento AM o PA: **
<br>
<input type="text" class="input1" name="Momento2" value="<?php echo $reg['Momento']?>" >
<br>
<br>
<input type="hidden" name="Momento1" value="<?php echo $reg['Momento']?>">
<br>
**Ingresar La Fecha: **
<br>
<input type="text" class="input1" name="Fecha2" value="<?php echo $reg['Fecha']?>" >
<br>
<br>
<input type="hidden" name="Fecha1" value="<?php echo $reg['Fecha']?>">
<br>
**Ingresar el Doctor**
<br>
<input type="text"  class="input1" name="Doctor2" value="<?php echo $reg['Doctor']?>" >
<br>
<br>
<input type="hidden" name="Doctor1" value="<?php echo $reg['Doctor']?>">
<br>
**Ingresar sus Sintomas**
<br>
<input type="text"  class="input1" name="Sintoma2" value="<?php echo $reg['Sintoma']?>" >
<br>
<br>
<input type="hidden" name="Sintoma1" value="<?php echo $reg['Sintoma']?>">
<br>
**Ingresar la Especialidad**
<br>
<input type="text"  class="input1" name="Especialidad2" value="<?php echo $reg['Especialidad']?>" >
<br>
<br>
<input type="hidden" name="Especialidad1" value="<?php echo $reg['Especialidad']?>">
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