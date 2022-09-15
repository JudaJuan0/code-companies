<?php
header('Content-Type: text/html; charset=utf-8;');
?>
<!DOCTYPE html>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <link rel="stylesheet" type="text/css" href="css/animate.css">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login de Acceso</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <link rel="stylesheet" type="text/css" href="css/animate.css">
<body>

<center>
<h1 class="mi-letra">Bienvenido al sistema</h1>
<form action="index2.php" method="post">
	<label class="mi-letra3" for="usuario">Usuario:</label><br />
	<input type="text" onpaste="return false" onkeypress="javascript: return NoEspacio(event,this)" name="usuario" required /><br />

	<label class="mi-letra3" for="contra">Contraseña:</label><br />
	<input type="password" name="contra" required /><br /><br />

	<input type="submit" value="Acceder">
</form>
<br>
<br>

<a href="registro.php" class="mi-letra">Registrate Ya...</a>
<script language="javascript">
function NoEspacio(e, campo){
	key = e.keyCode ? e.keyCode : e.which;
	if (key == 32) {return false;}
}

</script>
</center>
</body>
</html>