<?php
require ("accedea.php");
require_once("conexion.php");

if ($_POST['contra'] <> $_POST['confirma'])
{
	echo "<script>
	alert ('Las contraseñas NUEVAS no coinciiden');
	history.back();
	</script>";

}else
{
	$nueva= sha1($_POST['contra']);
	$cambia=mysql_query("UPDATE usuario SET contra = '$nueva' WHERE idusuario ='$_SESSION[userid]'");
	echo "<center>
	<font size='6'> Contraseña cambiada <br>
	<a href='totusuarios.php'>Volver al listado</a>
	</font>
	</center>";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<title></title>
</head>
</html>