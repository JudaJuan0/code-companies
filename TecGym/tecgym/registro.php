<?php
require("accedeb.php");

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8 /">
	<title>Registro de Usuarios</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <link rel="stylesheet" type="text/css" href="css/animate.css">
<body>
<center>
	<h1 class="mi-letra3">Registro de Usuario</h1>
	<form action="registro2.php" method="post">
	<label class="mi-letra4" for="usuario">Usuario:</label><br />
	<input type="text" onpaste="return false" onkeypress="javascript: return NoEspacio(event,this)" name="usuario" required /><br />

	<label class="mi-letra4" for="nombre">Nombre:</label><br />
	<input type="text" name="nombre" required /><br />

	<label class="mi-letra4" for="contra">Contraseña:</label><br />
	<input type="password" name="contra" required /><br />

	<label class="mi-letra4" for="confcontra">Confirmar:</label><br />
	<input type="password" name="confcontra" required /><br />

	<label class="mi-letra4" for="nivel">Nivel de Acceso:</label><br />
	<select name="nivel">
		<option value="u" selected>Usuario</option>
		
	</select><br /><br />

	<input type="submit" value="Registrar">
	<input type="button" onclick="javascript:location.href='totusuarios.php';" value="Cancelar" />
</form>
<script language="javascript">
	function NoEspacio (e, campo){
		key = e.keyCode ? e.keyCode : e.which
		if (key == 32) {return false;}
	}
</script>
</center>
</body>
</html>