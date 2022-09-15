<?php
require("accede.php");
require_once("conexion.php");
$error=0;
$sql=mysql_query("SELECT contra FROM usuario WHERE usuario = '$_SESSION[usuario]'");
while($busca = mysql_fetch_row($sql))
{
	if ($busca[0] <> sha1($_POST['actual']))
	{
		$error=1;
		echo "<script>
		alert ('La contraseña ACTUAL no coincide');
		location.href='userclave.php'
		</script>";
	}
}
if ($_POST['contra']<>$_POST['confirma'])
{
	echo "<script>
	alert ('Las contraseñas NUEVAS no coinciden');
	location.href='userclave.php';
	</script>";
}else
{
	if ($error<>1)
	{
		$nueva= sha1($_POST['contra']);
		$cambia=mysql_query("UPDATE usuario SET contra = '$nueva' WHERE usuario ='$_SESSION[usuario]'")
		or die("Error al cambiar contraseña".mysql_error());
		echo "<script>
		alert('Contraseña CAMBIADA con exito');
		location.href='principal.php'
		</script>";
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8 /">
	<title></title>
</head>
</html>