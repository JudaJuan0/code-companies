<?php
header('Content_Type: text/html;charset=uft-8');
if (!isset($_SESSION))
	session_start();

if (@$_SESSION['permite']<>'si')
{
	echo "<script>
	alert('Debe iniciar sesion');
	location.href='index.php'
	</script>";
	$_SESSION=array();
	session_destroy();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

</body>
</html>