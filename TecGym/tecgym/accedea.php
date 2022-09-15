<?php
header('Content-Type: text/html; charset=iso-8859-1');
if (!isset($_SESSION))
	session_start();
if(@$_SESSION['permite']<>'si')
{
	echo "<script>
	alert('Debe iniciar sesion');
	location.href='index.php'
	</script>";
	$_SESSION=array();
	session_destroy();
}else
{
	if (@$_SESSION['nivel']<>'a')
	{
		echo "<script>
		alert('No tiene el nivel autorizado');
		location.href='principal.php'
		</script>";
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />	
</head>
<body>

</body>
</html>