<?php
require("accedeb.php");

require_once("conexion.php");

$existe=0;
if ($_POST['contra']<>$_POST['confcontra']) 
{
	echo "<script>
	alert('Las contraseñas no coinciden');
	history.back();
	</script>";
}else
{
	$sql=mysql_query("SELECT * FROM usuario");
	while ($busca = mysql_fetch_array($sql))
	 {
		if ($busca[1]==$_POST['usuario']) 
			$existe=1;
	}
	if ($existe==1)
	{
		echo "<script>
        alert('El usuario ya existe');
        history.back();
        </script>";
	}else	
	{
		$contra=sha1($_POST['contra']);
		mysql_query("INSERT INTO usuario (usuario,nombre,contra,nivel) VALUES ('$_POST[usuario]','$_POST[nombre]','$contra','$_POST[nivel]')") or
		die ("Problema al insertar datos".mysql_error());
		echo "<center>
		<font size='6'> Usuario registrado <br>
		<a href='index.php'>Inicio</a>
		</font>
		</center>";
	}
}
?>