<?php
header('Content-Type: text/html; charset=utf-8');
require("accede.php");
require_once("conexion.php");

$sql = "SELECT * FROM usuario";
$resultado = mysql_query($sql);

echo "<html><center>
		<h1>Modificar y/o Eliminar Usuarios</h1>
		<body>
		<form name='ejecuta' method='post' action='modusuario2.php'>
			<table>
				<tr>
					<td>Id</td>
					<td>Usuario</td>
					<td>Nombre</td>
					<td>Nivel</td>
					<td>Modificar</td>
					<td>Eliminar</td>
				</tr></center>";
 $i = 1;
while ($row = mysql_fetch_row($resultado)) {
	echo "<center><tr><td><input type='hidden' name='idusuario[$i]' value='".$row[0]."'/>".$row[0]."</td>
			<td><input type='text' size='20px' require='' name='nomusuario[$i]' value='".$row[1]."'/></td>
			<td><input type='text' size='20px' require='' name='nombre[$i]' value='".$row[2]."'/></td>
			<td><input type='text' size='20px' require='' name='Nivel[$i]' value='".$row[4]."'/></td>
			

			<td><input type='radio' name='seleccion[$i]' value='modifica".$row[0]."'></td>
			<td><input type='radio' name='seleccion[$i]' value='elimina".$row[0]."'></td>
			</tr></center>";
			++$i;
}
echo 		"</table><center>
			<input type='submit' value='Enviar'>
			<input type='button' onclick='javascript:cambiapag();' value='Cancelar' />
			</center>
		</form>
		</body>
</html>";
?>

<script>
	function cambiapag(){
		location.href="totusuarios.php"
	}
</script>