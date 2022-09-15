<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://wwww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8/">
	<title>Buscar Ususarios</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <link rel="stylesheet" type="text/css" href="css/animate.css">
<body>
<div align="center">
<h1 class="mi-letra">BUSCAR USUARIOS</h1>
<form id="form1" name="form1" method="post" action="bususuario2.php">
	<label class="mi-letra" for="select">Buscar por :</label>
	<select name="campo" id="select">
		<option value="nombre">Nombre</option>
	</select><br/><br/>
	<h1 class="mi-letra">Digite el dato:</h1>
	<input type="search" name="buscar" />
	<input type="submit" name="Buscar" />
	<input type="button" onclick="javascript:location.href='totalumnos.php';" value="Cancelar"/>
</form>
</div>
</body>
</html>