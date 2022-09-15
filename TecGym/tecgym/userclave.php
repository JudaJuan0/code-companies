<?php
require("accede.php");
require_once("conexion.php");

$consulta=mysql_query("SELECT * FROM usuario WHERE usuario = '$_SESSION[usuario]'")
or die ("Problema al consultar al usuario".mysql_error());

$fila=mysql_fetch_row($consulta);

echo "<center>";
echo "<h1>Cambiar contraseña a usuario</h1>";
echo "<form action='userclave2.php' method='post'>";

echo "<label for='usuario'>Usuario:</label><br>";
echo "<input type='text' name='usuario' style='text-align:center' readonly value='$fila[1]'> <br><br>";

echo "<label for='nombre'>Nombre:</label><br>";
echo "<input type='text' name='nombre'style='text-align:center' readonly value='$fila[2]'> <br><br>";

echo "<label for='actual'>Contraseña:</label><br>";
echo "<input type='password' name='actual'style='text-align:center' required> <br><br>";

echo "<label for='contra'>Nueva Contraseña:</label><br>";
echo "<input type='password' name='contra'style='text-align:center' required> <br><br>";

echo "<label for='confirma'>Confirmar Contraseña:</label><br>";
echo "<input type='password' name='confirma'style='text-align:center' required> <br><br>";

echo "<input type='submit' value='Cambiar'>";
echo "<input type='button' onclick='javascript:cambiapag();' value='Cancelar'>";
echo "</form>";
echo "</center>";
?>

<script>
function cambiapag()
{
	location.href="principal.php"
}
</script>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8 /">
	<title></title>
</head>
</html>