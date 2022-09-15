<?php
require("accedea.php");
require_once("conexion.php");
$registro = mysql_query("SELECT * FROM usuario")
or die ("Problema en la consulta de datos".mysql_error());
header('content-type: text/html;charset=utf-8');
echo "<center>";
echo "<h1>Lista de usuarios</h1>";
echo "<table border='1' width='400'>";
echo "<tr>";
echo "<th scope='col'>Usuario</th>";
echo "<th scope='col'>Nombre</th>";
echo "<th scope='col'>Nivel</th>";
echo "<th scope='col'>IP</th>";
echo "<th scope='col'>ult. Acceso</th>";
echo "<th scope='col'>Contraseña</th>";
echo "</tr>";

while ($fila = mysql_fetch_array($registro))
 {
	echo "<tr>";
	echo "<td>$fila[1]</td>";
	echo "<td>$fila[2]</td>";
	echo "<td>$fila[4]</td>";
	echo "<td>$fila[5]</td>";
	echo "<td>$fila[6]</td>";
	if ($fila[0]<>0)
	echo "<td><a href='cambiaclave.php?user=$fila[0]'>Cambiar</a></td>";
	echo "</tr>";	
}
echo "</table>";
echo "</center>";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8 " />
	<title>Lista de Usuarios</title>
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" />
</head>
<body>
<br>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <link rel="stylesheet" type="text/css" href="css/animate.css">
<center>

	<table width="300" border="0">
		<tr>
			<td><a href="registro.php">Agregar</a></td>
			<td><a href="bususuario.php">Buscar</a></td>
			<td><a href="modusuario.php">Eliminar y/o Modifica</a></td>
			<td><a href="principal.php">Regresar</a></td>
			
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</center>
</body>