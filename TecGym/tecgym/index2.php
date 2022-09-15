<?php
session_start();
$_SESSION['permite']='no';

require_once("conexion.php");

@$usuario = $_POST['usuario'];
@$contra = sha1($_POST['contra']);
$existe=0;
$consulta = mysql_query("SELECT * FROM usuario WHERE usuario='$usuario' AND contra='$contra'");
while ($fila = mysql_fetch_row($consulta))
	{
		$existe=1;
		$_SESSION['nombre'] = $fila[2];
		$_SESSION['nivel'] = $fila[4];
	}
if ($existe==1) 
{
	$_SESSION['permite'] = 'si';
	$_SESSION['usuario'] = $usuario;
	$sql="UPDATE usuario SET ip='".$_SERVER['REMOTE_ADDR']."',ulacces='".date('Y-m-d H:i:s')."'WHERE usuario='$usuario'";
	$datos = mysql_query($sql) or die ("Error al insertar ip".mysql_error());

	echo "<script>
	alert('Bienvenido(a) ".$_SESSION['nombre']."');
	location.href='principal.php'
	</script>";
}else
{
	echo "<script>
	alert('Usuario o contraseña incorrectos');
	location.href='index.php'
	</script>";
}
?>