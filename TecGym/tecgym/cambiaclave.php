<?php
require("accedea.php");
require_once("conexion.php");

$_SESSION ['userid']=@$_GET['user'];

$consulta=mysql_query("SELECT * FROM usuario WHERE idusuario = '$_SESSION[userid]'")
or die ("Problema al consultar al usuario".mysql_error());

$fila=mysql_fetch_row($consulta);

echo "<center>";
echo "<h1>Cambiar la contraseña a usuario</h1>";
echo "<form action='cambiaclave2.php' method='post'>";

echo "<label for='usuario'>Usuario:</label><br>";
echo "<input type='text' name='usuario' style='text-align:center' readonly value='$fila[1]'> <br><br>";

echo "<label for='nombre'>Nombre:</label><br>";
echo "<input type='text' name='nombre' style='text-align:center' readonly value='$fila[2]'> <br><br>";

echo "<label for='contra'>Acutal Contraseña:</label><br>";
echo "<input type='text' name='contra' style='text-align:center' readonly value='$fila[3]'> <br><br>";

echo "<label for='usuario'>Nueva Contraseña:</label><br>";
echo "<input type='password' name='contra' style='text-align:center' required> <br><br>";

echo "<label for='confirma'>Confirmar contraseña:</label><br>";
echo "<input type='password' name='confirma' style='text-align:center' required> <br><br>";

echo "<input type='submit' value='Cambiar'>";
echo "<input type='button' onclick='javascrip:cambiapag();' value='Cancelar'>";
echo "</form>";
echo "</center>";
?>

<script>
function cambiapag()
{
	location.href="totusuarios.php"
}
</script>


<html>
<head>
	<meta http-equiv="Content-type" content="text/html" charset="UTF-8" />
	<title></title>
</head>
<body>
	
</body>
</html>