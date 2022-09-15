<?php
require_once("conexion.php");

$busq = mysql_query("SELECT * FROM usuario WHERE $_POST[campo] LIKE '$_POST[buscar]%'") or die ("Problema en la consulta de datos".mysql_error());

echo "<center><h1>Resultado de la busqueda<h1/>";
echo "<center><table border='1' width='200'>";
	echo "<tr>";
		echo "<th scope='col'>Usuario</th>";
		echo "<th scope='col'>Nombre</th>";
		echo "<th scope='col'>Clave</th>";
		echo "<th scope='col'>Ip</th>";
		echo "<th scope='col'>ult. Acceso	</th>";
	echo "</tr>";
	while($resul = mysql_fetch_array($busq)){
		echo "<tr>";
			echo "<td>$resul[1]</td>";
			echo "<td>$resul[2]</td>";
			echo "<td>$resul[3]</td>";
			echo "<td>$resul[4]</td>";
			echo "<td>$resul[5]</td>";

		echo "</tr>";
	}
echo "</table>";
?>
<html>
<head>
	<title>Resultados de la busqueda</title>
</head>
<body>
	<br>
	<center>
		<table width="254" border="0">
			<tr>
				<td width="128" align="center"><a href="bususuario.php">Nueva Busqueda</a></td>
				<td width="116" align="center"><a href="totusuarios.php">Mostrar Todos</a></td>
			</tr>
		</table>
	</center>
</body>
</html>